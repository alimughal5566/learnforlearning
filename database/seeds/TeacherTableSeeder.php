<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teschers')->insert([

            'user_id' => '2',
            'subject' => 'admin',
            'level' => 'admin@gmial.com',
            'profession' =>Carbon::now(),
            'online_session' => '03001234567',
            'discription' => 'admin',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);
    }
}
