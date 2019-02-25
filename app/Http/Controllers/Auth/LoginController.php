<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;
use App\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        // Dirección del servidor AD
        $ip = "192.108.24.107";
        // Dominio al cual nos vamo'a conectá'
        $dn = "OU=FGE,DC=fiscaliaveracruz,DC=gob,DC=mx";
        // Grupos de AD a los que deben petenecer los usuarios para entrar al sistema
        // -- Recursos Humanos
        // # -- Session para comparar
        $sesionF = 'CN=RH,OU=GRUPOS DE APLICACIONES,OU=FGE,DC=fiscaliaveracruz,DC=gob,DC=mx';
        // Correo que viene del formulario
        $usuario = $request->input('email');
        // Contraseña que viene del formulario
        $pass = $request->input('password');
        // De momento no lo utilizamos
        $dominio = '@fiscaliaveracruz.gob.mx';
        // Intentamos conectar con AD
        $conexion = ldap_connect($ip);
        // Ésta vaina no sé para qué pero la vi en Stackoverflow v':
        ldap_set_option($conexion,LDAP_OPT_REFERRALS,0);
        // x2
        ldap_set_option($conexion,LDAP_OPT_PROTOCOL_VERSION,3);
        // Abrimos conexión con AD para consultar si las credenciales existen
        if($bind = @ldap_bind($conexion, $usuario, $pass)) {
            // Pondremos como filtro primario el correo del usuario
            $filtro = "(userPrincipalName=".$usuario.")";
            // Indicamos a la consulta a AD los atributos de usuario que deseamos obtener
            $attr = array('displayname', 'memberof');
            // Ejecutamos una consulta preguntando si ese usuario existe en AD
            $result = ldap_search($conexion, $dn, $filtro, $attr);
            // Almacenamos en una variable el resultado de la consulta (es un array con muchos arrays)
            $entries = ldap_get_entries($conexion, $result);
            //dd($entries);
            // Cerramos conexión, ya tenemos lo que queremos :3
            ldap_unbind($conexion);
            // Preguntamos si en el resultado de la consulta existe al menos uno de los grupos a los que nuestros usuarios deben pertenecer
            if ( isset($entries[0]['memberof']) && (in_array($sesionF, $entries[0]['memberof']) )) {
                // Recorremos arreglo
                //dd($entries);
                foreach ($entries[0]['memberof'] as $key) {
                    // Esta instrucción es para peinar al primer resultado porque siempre devuelve un entero
                    if (!is_numeric($key)) {
                        // Si en esta vuelta encontramos el grupo de RRHH iniciamos la session
                        if ($key == $sesionF) {
                            session(['fuserenabled' => $usuario]);
                        }
                    }
                    //dd($entries);
                }
                // Extraemos el nombre completo de quien intenta logear
                $nombreUsuario = $entries[0]['displayname'][0];
                // Preguntamos en nuestra tabla local si el correo ya está registrado, si no para "espejear" ese usuario en tabla local
                if (!User::where('email', '=', $usuario)->count() > 0) {
                    // Espejeamos usuario
                    User::create([ 'name' => $nombreUsuario, 'email' => $usuario, 'password' => Hash::make($pass), ]);
                }

                $usuarioActual = User::where('email', '=', $usuario)->first();

                if (!Hash::check($pass, $usuarioActual->password)) {
                    $usuarioActual->fill([
                                'password' => Hash::make($pass)
                            ])->save();
                     // dd('no coinciden');
                } 
                // Preparamos las credenciales para iniciar sesión
                $userdata = array( 'email' => $usuario, 'password' => $pass );
                // Utilizamos el auth de Laravel para iniciar sesión (y poder ocupar sus helpers)
                if (Auth::attempt($userdata)) { 
                    // Iniciamos otra session, no sé para qué pero puede servir después xd
                    session(['usuario' => $usuario]);
                    // Después de toda la misa de arriba ya puede ingresar al sistema :D
                    return redirect('/ordenes');
                } else {
                    // Si la "segunda autenticación" falla, lo mandamos a login
                    return redirect('/login');
                }
            } else {
                // Si el usuario existe en AD pero no en los grupos indicados, igual peleishon al logineishon
                return redirect('/login');
            }
        } else {
            // Si no existe en AD ps qué haces aquí, go home you're drunk
            return redirect('/login');
        }
    }

}
