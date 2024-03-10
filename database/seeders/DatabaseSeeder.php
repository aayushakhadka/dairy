<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'aayusha@321.com',
            'password' => bcrypt('aayusha@123')
        ]);

        $this->call([
            FarmerDetailSeeder::class,
            OrderSeeder::class
        ]);
    }
    }
