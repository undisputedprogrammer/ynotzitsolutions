<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(1)->create();

        \App\Models\Blog::factory(3)->create();

        \App\Models\User::factory()->create([
            'name' => 'Muhammed Ali',
            'email' => 'ali@ynotzitsolutions.com',
            'email_verified_at' => now(),
            'password' => Hash::make('itsali'), // password
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Anjitha',
            'email' => 'anjitha@ynotzitsolutions.com',
            'email_verified_at' => now(),
            'password' => Hash::make('itsanjitha'), // password
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Revathi',
            'email' => 'revathi@ynotzitsolutions.com',
            'email_verified_at' => now(),
            'password' => Hash::make('itsrevathi'), // password
            'remember_token' => Str::random(10),
        ]);

    }
}
