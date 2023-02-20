<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        'name' => 'Chan Ko Min',
        'email' => 'chankomin225@gmail.com',
        'phone' => '09792213808',
        'address' => 'Magway',
        'role' => 'admin',
        'gender' => 'male',
        'password' => Hash::make('prometheus')
       ]);
    }
}