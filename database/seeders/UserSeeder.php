<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Factory::create();

        User::create([
            'user_id' => null,
            'first_name' => 'João Manoel',
            'last_name' => 'Silva',
            'username' => 'jotahtsx',
            'email' => 'joao@example.com',
            'phone' => '86999999999',
            'company' => 'Beleza e CIA',
            'avatar' => 'avatars/default.png',
            'password' => Hash::make('password123'),
            'ip_address' => '127.0.0.1',
        ]);

        for ($i = 1; $i < 40; $i++) {
            $existingIds = User::pluck('id')->toArray();

            $randomUserId = $existingIds[array_rand($existingIds)];

            User::create([
                'user_id' => $randomUserId,
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'username' => $faker->unique()->userName(),
                'email' => $faker->unique()->safeEmail(),
                'phone' => $faker->unique()->numerify('869########'),
                'company' => $faker->company(),
                'avatar' => 'avatars/default.png',
                'password' => Hash::make('password123'),
                'ip_address' => $faker->ipv4(),
            ]);
        }
    }
}
