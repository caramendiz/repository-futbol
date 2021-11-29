<?php

namespace Database\Seeders;

use App\Models\Equipos_ciudades;
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
        // \App\Models\User::factory(10)->create();
        $equipo=new Equipos_ciudades();
        $equipo->name_equipo="Junior";
        $equipo->name_ciudades="Barranquilla";
        $equipo->save();

        $equipo2=new Equipos_ciudades();
        $equipo2->name_equipo="Millonarios";
        $equipo2->name_ciudades="Bogota";
        $equipo2->save();

        $equipo3=new Equipos_ciudades();
        $equipo3->name_equipo="America";
        $equipo3->name_ciudades="Cali";
        $equipo3->save();

        $equipo4=new Equipos_ciudades();
        $equipo4->name_equipo="Deporte Tolima";
        $equipo4->name_ciudades="Tolima";
        $equipo4->save();
    }
}
