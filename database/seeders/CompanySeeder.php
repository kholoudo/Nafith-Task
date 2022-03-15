<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'Name' => 'Nokia',
                'Email' => 'Nokia@g.com',
                'Website' =>'www.Nokia.com',
            ],

            [
                'Name' => 'Orange',
                'Email' => 'Orange@g.com',
                'Website' =>'www.Orange.jo.com',

            ],
            [
                'Name' => 'Upscale',
                'Email' => 'Upscale@g.com',
                'Website' =>'https:www.upscale.com',

            ]



        ]);
    }
}
