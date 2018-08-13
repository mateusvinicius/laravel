<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'id_usuario' => '1',
            'sexo' => '1',
            'data_nacimento' => '1997-04-14',
            
        ]);
    }
}
