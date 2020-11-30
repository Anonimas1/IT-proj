<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('animal_genders')->truncate();
        DB::table('animal_genders')->insert([
            'name' => 'berniukas'
        ]);
        DB::table('animal_genders')->insert([
            'name' => 'mergaite'
        ]);
        DB::table('animal_states')->truncate();
        DB::table('animal_states')->insert([
            'name' => 'dingęs'
        ]);
        DB::table('animal_states')->insert([
            'name' => 'rastas'
        ]);
    }
}
