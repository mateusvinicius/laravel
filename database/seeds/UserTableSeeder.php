<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'id_role' => '1',
            'name' => 'Mateus',
            'email' => 'admin@admin.com',
            'password' => bcrypt('32486466'),
        ]);
    }
}
