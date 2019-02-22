<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CatObjetoGastoSeeder::class);
        $this->call(EstructuraOrgSeeder::class);
        $this->call(EstructuraPSeeder::class);
        $this->call(CatCuentasSeeder::class);
        $this->call(CatMatrizPagadoGastosSeeder::class);
        $this->call(CatMatrizDevengadoGastosSeeder::class);
        $this->call(CatMatrizIngresosDevenSeeder::class);
    }
}
