<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('users')->insert([
            'name'=>'Miguel',
            'email'=>'miguelrojas788@gmail.com',
            'email_verified_at'=>Carbon::now(),
            'password'=>Hash::make('miguelrh'),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]); */

        DB::table('users')->insert([
            'name'=>'Angel',
            'email'=>'miguelrh788@gmail.com',
            'email_verified_at'=>Carbon::now(),
            'password'=>Hash::make('miguelrh'),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
    }
}
