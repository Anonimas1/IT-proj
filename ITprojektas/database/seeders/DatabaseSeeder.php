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


        $permissions = ['view-post', 'create-post', 'create-comment', 'view-comment', 'delete-post', 'see-post-views', 'change-user-permissions'];
        DB::table('permissions')->truncate();
        foreach($permissions as $perm){
            DB::table('permissions')->insert([
                'name' => $perm
            ]);
        }

        $roles = ['unregistered', 'registered', 'moderator', 'admin'];
        DB::table('roles')->truncate();
        foreach($roles as $role){
            DB::table('roles')->insert([
                'name' => $role
            ]);
        }
        //Number of permisions for each role
        $permissions_roles = [1, 4, 6, 7];
        DB::table('permission_role')->truncate();
        for($i = 1; $i <= 4; $i++){
            for($j=1; $j <=$permissions_roles[$i - 1]; $j++){
                DB::table('permission_role')->insert([
                    'role_id' => $i,
                    'permission_id' => $j
                ]);
            }
        }
        DB::table('users')->truncate();
        \App\Models\User::factory(10)->create();
    }
}
