<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
     
        DB::table('nivels')->insert([
            'id_role_user' => '1',
            'nivel' =>  'Admin',

        ]);
    }
}
