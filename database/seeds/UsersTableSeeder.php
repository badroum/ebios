<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        [
            'name' => 'Admin',
            'email' => 'ubohbsr.sis@indonesiapower.co.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'avatar' => '/images/user-icon.png'
        ],
        [
            'name' => 'Author',
            'email' => 'ubohbsr.helpdesk@indonesiapower.co.id',
            'password' => bcrypt('password'),
            'role' => 'author',
            'avatar' => '/images/user-icon.png'
        ],
                ];
    
    DB::table('users')->insert($users);

    }

    
}
