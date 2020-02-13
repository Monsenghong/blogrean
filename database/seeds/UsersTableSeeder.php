<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'hong',
            'username' => 'monsenghong',
            'email' => 'senghong@gmail.com',
            'password' => bcrypt('mypassword'),

        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'pich',
            'username' => 'monypich',
            'email' => 'pich@gmail.com',
            'password' => bcrypt('pich.com'),

        ]);
    }
}
