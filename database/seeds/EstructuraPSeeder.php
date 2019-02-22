<?php

use Illuminate\Database\Seeder;

class EstructuraPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('controlf_estructurapresupuestal')->insert([
            ['organizacion'=> '', 'funcion'=>'', 'proPresupuestal'=>'', 'partida'=>'','fuenteF'=>'','tGasto'=>'','descripcion'=>'SELECCIONE UNA OPCIÓN'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'01E101', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'FISCALÍA GENERAL DEL ESTADO'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'02E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'FISCALÍA ESPECIALIZADA EN DELITOS ELECTORALES Y EN LA ATENCIÓN DE DENUNCIAS CONTRA PERIODISTAS Y/O COMUNICADORES'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'03E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'FISCALÍA DE INVESTIGACIONES MINISTERIALES'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'04E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'DIRECCIÓN GENERAL DE SERVICIOS PERICIALES'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'05E206', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'DIRECCIÓN GENERAL DE LA POLICIA MINISTERIAL'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'06E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'CENTRO ESTATAL DE ATENCIÓN A VÍCTIMAS DEL DELITO'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'07E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'COODINACIÓN DE FISCALES ESPECIALIZADOS EN DELITOS RELACIONADOS CON HECHOS DE CORRUPCIÓN Y COMETIDOS POR SERVIDORES PÚBLICOS'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'08E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'DIRECCIÓN DE CONTROL DE PROCESOS'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'09E206', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'UNIDAD ESPECIALIZADA EN COMBATE AL SECUESTRO'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'10E101E', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'CENTRO DE EVALUACIÓN Y CONTROL DE CONFIANZA'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'11E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'FISCALÍA REGIONAL DE JUSTICA ZONA CENTRO XALAPA'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'12E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'FISCALÍA REGIONAL DE JUSTICA ZONA SUR COATZACOALCOS'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'13E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'FISCALÍA REGIONAL DE JUSTICA ZONA CENTRO CÓRDOBA'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'14E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'FISCALÍA REGIONAL DE JUSTICIA ZONA CENTRO COSAMALOAPAN'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'15E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'FISCALÍA REGIONAL DE JUSTICA ZONA NORTE TUXPAN'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'16E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'FISCALÍA REGIONAL DE JUSTICIA ZONA NORTE TANTOYUCA'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'17E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'FISCALÍA REGIONAL DE JUSTICIA ZONA CENTRO VERACRUZ'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'18E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'FISCALÍA COORDINADORA ESPECIALIZADA EN ASUNTOS INDÍGENAS Y DERECHOS HUMANOS'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'19E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'VISITADURÍA GENERAL'],
            ['organizacion'=> '401A06100', 'funcion'=>122, 'proPresupuestal'=>'20E205', 'partida'=>11300001,'fuenteF'=>160118,'tGasto'=>1,'descripcion'=>'FISCALÍA COORDINADORA ESPECIALIZADA EN INVESTIGACIÓN DE DELITOS DE VIOLENCIA CONTRA LA FAMILIA, MUJERES, NIÑAS, NIÑOS Y TRATA DE PERSONAS']

            
        ]);
    }
    
}
