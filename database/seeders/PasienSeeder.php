<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasien;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Create a user for the patient
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
        ]);

        // Create patient data
        Pasien::create([
            'user_id' => $user->id,
            'nik' => '1234567890123456',
            'nama' => 'John Doe',
            'alamat' => 'Jl. Contoh No. 123',
            'no_hp' => '081234567890',
            'tanggal_lahir' => '1990-01-01',
        ]);

        // Create another patient
        $user2 = User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
        ]);

        Pasien::create([
            'user_id' => $user2->id,
            'nik' => '6543210987654321',
            'nama' => 'Jane Doe',
            'alamat' => 'Jl. Sample No. 456',
            'no_hp' => '089876543210',
            'tanggal_lahir' => '1992-02-02',
        ]);
    }
}
