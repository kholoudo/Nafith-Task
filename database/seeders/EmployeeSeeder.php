<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('employees')->insert([
            [
                'employee_name' => 'rami',
                'employee_email' => 'rami@g.com',
                'employee_phone' =>'07777777777',
                'company_id'=>1

            ],

            [
                'employee_name' => 'naser',
                'employee_email' => 'naser@g.com',
                'employee_phone' =>'07777777777',
                'company_id'=>2


            ],
            [
                'employee_name' => 'reem',
                'employee_email' => 'reem@g.com',
                'employee_phone' =>'07777777777',
                'company_id'=>3


            ]



        ]);


}

}
