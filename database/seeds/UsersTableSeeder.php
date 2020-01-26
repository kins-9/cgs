<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate the tables first
        User::truncate();
        //truncate the linking table by calling the DB fassade
        DB::table('role_user')->truncate();
        //get roles from database
        $adminRole=Role::where('name','admin')->first();
        $mentorRole=Role::where('name','mentor')->first();
        $applicantRole=Role::where('name','applicant')->first();

        $admin=User::create([
        'name'=>'Admin User',
        'phone'=>'0700000000',
        'email'=>'admin@cgs.com',
        'password'=>Hash::make('password')
        ]);
         $mentor=User::create([
        'name'=>'Mentor User',
        'phone'=>'0700000000',
        'email'=>'mentor@cgs.com',
        'password'=>Hash::make('password')
        ]);
         $applicant=User::create([
        'name'=>'Applicant User',
        'phone'=>'0700000000',
        'email'=>'applicant@gmail.com',
        'password'=>Hash::make('password')
        ]);

        //create roles
        $admin->roles()->attach($adminRole);
        $mentor->roles()->attach($mentorRole);
        $applicant->roles()->attach($applicantRole);
    }
}
