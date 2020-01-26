<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truckate table first
        Role::truncate();
        //create roles seeds to populate database anytime the project is created
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'mentor']);
        Role::create(['name'=>'applicant']);

    }
}
