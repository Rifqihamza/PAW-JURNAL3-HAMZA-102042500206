<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
        User::updateOrCreate(
            ['email' => 'dosen@celoe.test'],
            [
                'name' => 'Dr. Ir. Budi Santoso, M.T.',
                'password' => Hash::make('lecturetelyu123'),
                'role' => 'dosen',
                'nomor_induk' => '007865',
            ]
        );

        User::updateOrCreate(
            ['email' => 'jhondoe@student.telyutizen'],
            [
                'name' => 'Jhon Doe',
                'password' => Hash::make('jhondoe123'),
                'role' => 'mahasiswa',
                'nomor_induk' => '102042500206',
            ]
        );
    }
}
