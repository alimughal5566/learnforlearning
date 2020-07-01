<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

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
            'fname' => 'admin',
            'lname' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'type' => 'admin',
            'password' =>Hash::make('123123123'),
//            'admin' => 1,
//            'approved_at' => now(),
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);


        DB::table('users')->insert([
            'fname' => 'teacher',
            'lname' => 'teacher',
            'email' => 'teacher@gmail.com',
            'type' => 'teacher',
            'password' =>Hash::make('123123123'),
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);


        DB::table('users')->insert([
            'fname' => 'student',
            'lname' => 'student',
            'email' => 'student@gmail.com',
            'type' => 'student',
            'password' =>Hash::make('123123123'),
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);


//        DB::table('users')->insert([
//
//            'subject_id' => '4','9','10',
//            'fname' => 'ali',
//            'lname' => 'mughal',
//            'thumbmail' =>'photo',
//            'email' => 'teacher@gmail.com',
//            'email_verified_at' => Carbon::now(),
//            'user_contact' => '03001234567',
//            'type' => 'teacher',
//            'password' => Hash::make('123123123'),
//            'country' => 'pakistan',
//            'city' => 'Lahore',
//            'fof_session' => '1',
//            'created_at' =>Carbon::now(),
//            'updated_at' =>Carbon::now(),
//        ]);
//
//
//
//        DB::table('users')->insert([
//            'subject_id' => '1','2','3',
//            'fname' => 'ali',
//            'lname' => 'mughal',
//            'thumbmail' =>'photo',
//            'email' => 'student@gmail.com',
//            'email_verified_at' => Carbon::now(),
//            'user_contact' => '03001234567',
//            'type' => 'student',
//            'password' => Hash::make('123123123'),
//            'country' => 'pakistan',
//            'city' => 'Lahore',
//            'fof_session' => '2',
//            'created_at' =>Carbon::now(),
//            'updated_at' =>Carbon::now(),
//            ]);






    }
}
