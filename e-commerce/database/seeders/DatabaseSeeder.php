<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seller;
use App\Models\Category;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Seller::create([
            'name' => 'Akhil Jaiswar',
            'company' => 'Akiru Ventures',
            'email' => 'akhil.jaiswar272@gmail.com',
            'number' => '+919833058442',
            'slug' => 'akiru-ventures',
            'password' => '12345678',
        ]);
        Category::create([
            'name' => 'All',
            'slug' => 'all',
        ]);
    }
}
