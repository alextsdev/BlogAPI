<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a user with the specified email address
        User::factory()->create([
            'name' => 'Alex',
            'email' => 'alex@mail.es',
            'password' => bcrypt('12345678')
            ]);

        //$user->createToken('user-access');

        // Create 9 more users
        User::factory(9)->create();
    }
}
