<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'first_name' => 'Cyril',
        //     'last_name' => 'Fehintoluwa',
        //     'email' => 'cyrilcril@gmail.com',
        // ]);
        $this->call(RoleSeeder::class);
        \App\Models\User::factory()->times(7)->create();
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
    }
}
