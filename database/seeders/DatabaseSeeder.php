<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        \App\Models\User::factory()->create([
            'name'      => 'Admin',
            'handphone' => '+6281208120812',
            'email'     => 'ini_email@admin',
            'status'    => 'admin',
            'password'  => Hash::make('password')
        ]);

        /**
         * fake User 5 times
         */
        // \App\Models\User::factory(5)->create();
    }
}
