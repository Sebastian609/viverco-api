<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@viverco.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // Create sample users
        $users = [
            [
                'name' => 'Juan Pérez',
                'email' => 'juan.perez@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'María García',
                'email' => 'maria.garcia@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Carlos López',
                'email' => 'carlos.lopez@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Ana Rodríguez',
                'email' => 'ana.rodriguez@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Luis Martínez',
                'email' => 'luis.martinez@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Sofia Torres',
                'email' => 'sofia.torres@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Roberto Silva',
                'email' => 'roberto.silva@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Carmen Vega',
                'email' => 'carmen.vega@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Diego Morales',
                'email' => 'diego.morales@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Patricia Ruiz',
                'email' => 'patricia.ruiz@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }

        // Create additional users using factory if you want more
        // User::factory(20)->create();
    }
} 