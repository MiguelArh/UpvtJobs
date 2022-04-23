<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('salarios')->insert([
            'nombre'=>'No Mostrado por la Empresa',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>' 0 - 1,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'1,000 - 2,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'2,000 - 3,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'3,000 - 4,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'4,000 - 5,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'5,000 - 6,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'6,000 - 7,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'7,000 - 8,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'8,000 - 9,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'9,000 - 10,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'10,000 - 11,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'11,000 - 12,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'12,000 - 13,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'13,000 - 14,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'14,000 - 15,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'15,000 - 20,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'20,000 - 25,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'25,000 - 30,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'30,000 - 40,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('salarios')->insert([
            'nombre'=>'Más de 40,000 MXN',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

    }
}
