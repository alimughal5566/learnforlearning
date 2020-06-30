<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'level_id' => '1',
            'name' => 'English',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'level_id' => '2',
            'name' => 'English',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'level_id' => '3',
            'name' => 'English',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'level_id' => '4',
            'name' => 'English',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'level_id' => '1',
            'name' => 'Urdu',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'level_id' => '2',
            'name' => 'Urdu',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'level_id' => '3',
            'name' => 'Urdu',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'level_id' => '4',
            'name' => 'Urdu',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'level_id' => '1',
            'name' => 'Math',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'level_id' => '2',
            'name' => 'Math',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'level_id' => '3',
            'name' => 'Math',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'level_id' => '4',
            'name' => 'Math',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'level_id' => '1',
            'name' => 'physics',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'level_id' => '2',
            'name' => 'physics',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);
        DB::table('subjects')->insert([
            'level_id' => '3',
            'name' => 'physics',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);
        DB::table('subjects')->insert([
            'level_id' => '4',
            'name' => 'physics',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);


    }
}
