<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            'title' => 'UJPBSR Blog',
            'tagline' => 'Blog with Laravel Framework',
            'email' => 'ubohbsr.sis@indonesiapower.co.id',
            'phone' => '+62 81293577787',
            'address' => 'Merak Suralaya',
            'so_facebook' => 'https://facebook.com/indonesiapower',
            'so_twitter' => 'https://facebook.com/indonesiapower',
            'so_instagram' => 'https://instagram.com/indonesiapower'
        ];

        DB::table('settings')->insert($settings);
    }
}
