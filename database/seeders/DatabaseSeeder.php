<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();

        $roles = ['root','admin','editor'];
        $categogies = ['Informatique','Technologie','Ecologie'];

        array_map(function($role){
            DB::table('roles')->insert([
                'name' => $role
            ]);
        },$roles);

        array_map(function($cat){
            DB::table('categories')->insert([
                'name' => $cat
            ]);
        },$categogies);

        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);

        $this->call([
            ArticleSeeder::class,
        ]);
       
        
    }
}
