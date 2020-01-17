<?php

use App\User;
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
            'name' => 'Alex',
            'email' => 'user1@email.com',
            'password' => bcrypt('password'),
            'role_id' => DB::table('roles')->pluck('id')[0], //role admin
        ]);
        DB::table('users')->insert([
            'name' => 'Alex User',
            'email' => 'user2@email.com',
            'password' => bcrypt('password'),
            'role_id' => DB::table('roles')->pluck('id')[1], //role user
        ]);
        DB::table('users')->insert([
            'name' => 'Alex Teacher',
            'email' => 'user3@email.com',
            'password' => bcrypt('password'),
            'role_id' => DB::table('roles')->pluck('id')[2], //role teacher
        ]);
        DB::table('users')->insert([
            'name' => 'Alex Student',
            'email' => 'user4@email.com',
            'password' => bcrypt('password'),
            'role_id' => DB::table('roles')->pluck('id')[3], //role student
        ]);
        DB::table('users')->insert([
            'name' => 'Alex Guest',
            'email' => 'user5@email.com',
            'password' => bcrypt('password'),
            'role_id' => DB::table('roles')->pluck('id')[4], //role guest
        ]);
    }
}
