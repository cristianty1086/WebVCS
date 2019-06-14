<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => "administrador general", 
        ]);

        DB::table('roles')->insert([
            'name' => "administrador local", 
        ]);

        DB::table('roles')->insert([
            'name' => "usuario", 
        ]);
    }
}
