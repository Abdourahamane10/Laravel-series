<?php

namespace Database\Seeders;

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
        //\App\Models\User::factory(10)->create();
        //\App\Models\Serie::factory(10)->create();
        //\App\Models\Comment::factory(10)->create();
        //\App\Models\Contact::factory(10)->create();
        \App\Models\User::factory(5)->has(\App\Models\Serie::factory()->has(\App\Models\Comment::factory()->count(2))->count(3))->create();
        //->has(\App\Models\Comment::factory()->count(1))
    }
}
