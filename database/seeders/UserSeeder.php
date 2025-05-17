<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'niltonmatias@gmail.com')->first()) {
            User::create([
                'name' => 'Nilton Matias',
                'email' => 'niltonmatias@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
        }

        if (!User::where('email', 'ziara.antonio@gmail.com')->first()) {
            User::create([
                'name' => 'Ziara Rubane',
                'email' => 'ziara.antonio@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
        }

        if (!User::where('email', 'shilsia.libombos@gmail.com')->first()) {
            User::create([
                'name' => 'Shilsia Libombos',
                'email' => 'shilsia.libombos@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
        }

        if (!User::where('email', 'rui.antonio@gmail.com')->first()) {
            User::create([
                'name' => 'Rui António',
                'email' => 'rui.antonio@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
        }
    }
}
