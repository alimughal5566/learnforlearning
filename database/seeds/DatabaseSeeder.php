<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([LevelTableSeeder::class]);
        $this->call([SubjectTableSeeder::class]);
        $this->call([SchedulePageTableSeeder::class]);
        $this->call([HowitworksTableSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([ForParentTableSeeder::class]);
        $this->call([ForStudentTableSeeder::class]);
        $this->call([ForTeacherTableSeeder::class]);
    }
}
