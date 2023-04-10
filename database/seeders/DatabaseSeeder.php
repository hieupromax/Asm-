<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Ringtone;
use App\Models\User;
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
        Category::create(['name' => 'Pop']);
        Category::create(['name' => 'Hip hop']);
        Category::create(['name' => 'EDM & Electronic Music']);
        Category::create(['name' => 'Reggaeton']);
        Category::create(['name' => 'K-Pop']);
        Category::create(['name' => 'Rock']);
        Category::create(['name' => 'Metal']);
        Category::create(['name' => 'Classical Music']);
        Category::create(['name' => 'Rap']);
        User::create([
            'name' => 'admin',
            'email' => 'hieu@aaa.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => NOW(),
        ]);
        
        // \App\Models\User::factory(10)->create();
    }
}
