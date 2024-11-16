<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => Hash::make('admin'),

            ],
            [
                'name' => 'dosen',
                'email' => 'dosen@gmail.com',
                'role' => 'dosen',
                'status' => 'active',
                'password' => Hash::make('dosen'),
            ],
            [
                'name' => 'tendik',
                'email' => 'tendik@gmail.com',
                'role' => 'tendik',
                'status' => 'active',
                'password' => Hash::make('tendik'),
            ],
            [
                'name' => 'mahasiswa',
                'email' => 'mahasiswa@gmail.com',
                'role' => 'mahasiswa',
                'status' => 'active',
                'password' => Hash::make('mahasiswa'),
            ],
        ];
        DB::table('users')->insert($data);
    }
}
