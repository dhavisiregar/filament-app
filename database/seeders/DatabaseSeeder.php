<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Dhavi Siregar',
            'email' => 'dhavi@dhavi.com',
            'password' => bcrypt('12345678'),
            'is_admin' => true
        ]);

        $this->call(class: CountrySeeder::class);
        $this->call(class: StateSeeder::class);
        $this->call(class: CitySeeder::class);
    }
}
