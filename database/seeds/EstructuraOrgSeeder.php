<?php

use Illuminate\Database\Seeder;

class EstructuraOrgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('controlf_estructuradirec')->insert([
            ['id'=> 1, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS MATERIALES Y OBRA PÚBLICA', 'depto'=>'DEPARTAMENTO DE ADQUISICIONES'],
            ['id'=> 2, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS MATERIALES Y OBRA PÚBLICA', 'depto'=>'DEPARTAMENTO DE SERVICIOS GENERALES'],
            ['id'=> 3, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS MATERIALES Y OBRA PÚBLICA', 'depto'=>'OFICINA DE MANTENIMIENTO'],
            ['id'=> 4, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS MATERIALES Y OBRA PÚBLICA', 'depto'=>'OFICINA DE OFICIALÍA DE PARTES'],
            ['id'=> 5, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS MATERIALES Y OBRA PÚBLICA', 'depto'=>'DEPARTAMENTO DE ALMACÉN Y CONTROL DE INVENTARIOS'],
            ['id'=> 6, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS MATERIALES Y OBRA PÚBLICA', 'depto'=>'DEPARTAMENTO DE OBRA PÚBLICA'],
            ['id'=> 7, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS MATERIALES Y OBRA PÚBLICA', 'depto'=>'OFICINA DE PLANEACIÓN, ADJUDICACIÓN Y CONTRATACIÓN DE OBRA'],
            ['id'=> 8, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS MATERIALES Y OBRA PÚBLICA', 'depto'=>'OFICINA DE EJECUCIÓN DE OBRA'],
            ['id'=> 9, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS MATERIALES Y OBRA PÚBLICA', 'depto'=>'DEPARTAMENTO DE TRANSPORTE'],
            ['id'=> 10, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS HUMANOS', 'depto'=>'DEPARTAMENTO DE NÓMINA Y CONTROL DE PAGOS'],
            ['id'=> 11, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS HUMANOS', 'depto'=>'DEPARTAMENTO DE CONTROL DEL PERSONAL Y PRESTACIONES SOCIALES'],
            ['id'=> 12, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS HUMANOS', 'depto'=>'DEPARTAMENTO DE PLANEACIÓN Y DESARROLLO ORGANIZACIONAL'],
            ['id'=> 13, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS HUMANOS', 'depto'=>'OFICINA DE CUSTODIA DE DOCUMENTACIÓN'],
            ['id'=> 14, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS HUMANOS', 'depto'=>'OFICINA DE MEDICINA DE TRABAJO'],
            ['id'=> 15, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS FINANCIEROS', 'depto'=>'DEPARTAMENTO DE CONTROL PRESUPUESTAL'],
            ['id'=> 16, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS FINANCIEROS', 'depto'=>'DEPARTAMENTO DE CONTROL FINANCIERO'],
            ['id'=> 17, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS FINANCIEROS', 'depto'=>'DEPARTAMENTO DE CAJA'],
            ['id'=> 18, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'SUBDIRECCIÓN DE RECURSOS FINANCIEROS', 'depto'=>'DEPARTAMENTO DE CONTABILIDAD'],
            ['id'=> 19, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'COORDINACIÓN DE SUBSIDIOS FEDERALES', 'depto'=>'DEPARTAMENTO DE SUBSIDIOS FEDERALES'],
            ['id'=> 20, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'COORDINACIÓN DE SUBSIDIOS FEDERALES', 'depto'=>'DEPARTAMENTO DE CUENTA PÚBLICA'],
            ['id'=> 21, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'N/A', 'depto'=>'UNIDAD DE PROTECCIÓN CIVIL'],
            ['id'=> 22, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'N/A', 'depto'=>'OFICINA DE SEGURIDAD FÍSICA'],
            ['id'=> 23, 'direccion'=> 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN','subDirec'=>'N/A', 'depto'=>'ENLACES ADMINISTRATIVOS'],
                       
        ]);
    }
}
 