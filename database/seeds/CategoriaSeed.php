<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre'=>'Ing. Industrial',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre'=>'Ing. Energia',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre'=>'Ing. TI',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre'=>'Ing. Mecatronica',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre'=>' Ing. Mecanica Automotriz',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre'=>'Ing. Biotecnologia',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre'=>'Lic. Negocios Int.',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);


    }
}
