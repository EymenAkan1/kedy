<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('1'),
                'role' => 'admin', // Enum değer
                'parent_id' => null,
            ],
            [
                'name' => 'Staff',
                'email' => 'staff@example.com',
                'password' => bcrypt('2'),
                'role' => 'staff', // Enum değer
                'parent_id' => 1, // Admin kullanıcısı
            ],
            [
                'name' => 'Vendor',
                'email' => 'vendor@example.com',
                'password' => bcrypt('3'),
                'role' => 'vendor',
                'parent_id' => null,
            ],
            [
                'name' => 'Vendor',
                'email' => 'vendor@example.com',
                'password' => bcrypt('3'),
                'role' => 'vendor',
                'parent_id' => null,
            ],
            [
                'name' => 'Vendor',
                'email' => 'vendor@example.com',
                'password' => bcrypt('3'),
                'role' => 'vendor',
                'parent_id' => null,
            ],
            [
                'name' => 'Vendor',
                'email' => 'vendor@example.com',
                'password' => bcrypt('3'),
                'role' => 'vendor',
                'parent_id' => null,
            ],

        ]);
    }
}