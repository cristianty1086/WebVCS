<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetodoAnalisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('metodoanalisis')->insert([
            'name' => "cercos virtuales", 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('metodoanalisis')->insert([
            'name' => "contador de objetos",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('metodoanalisis')->insert([
            'name' => "objetos dejados o sustraidos", 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('metodoanalisis')->insert([
            'name' => "reconocimiento de rostros", 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('metodoanalisis')->insert([
            'name' => "reconocimiento de placas", 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
