<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            [   'name' => 'admin',
                'role' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'staff',
                'role' => 'staff',
                'email' => 'staff@gmail.com',
                'password' => bcrypt('password'),
                'created_at' => \Carbon\Carbon::now(),
            ],
        ]);
    }
}
