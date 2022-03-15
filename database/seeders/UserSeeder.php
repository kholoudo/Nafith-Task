<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'ahmad',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'role' => 'superadmin',

            ],

            [
                'name' => 'kholoud',
                'email' => 'kholoud@g.com',
                'password' => Hash::make('password1'),
                'role' => 'companyadmin',

            ],
            [
                'name' => 'haneen',
                'email' => 'haneen@g.com',
                'password' => Hash::make('password2'),
                'role' => 'employee',

            ],



        ]);


}}
