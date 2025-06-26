<?php

namespace Database\Seeders;


use App\Enums\RoleEnum;
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
        $user = User::factory()->create([
            'name' => 'User',
            'surname' => '1',
            'email' => 'user1@ferisoft.com',
        ]);

        $user->assignRole(RoleEnum::Admin->value);


        $user = User::factory()->create([
            'name' => 'User',
            'surname' => '2',
            'email' => 'user2@ferisoft.com',
        ]);

        $user->assignRole(RoleEnum::Admin->value);
    }
}
