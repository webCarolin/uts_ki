<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RekamMedis;
use App\Models\User;
use App\Models\Pasien;
use Illuminate\Support\Facades\Hash;

class RekamMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Create a doctor user
        $dokter = User::create([
            'name' => 'Dr. Smith',
            'email' => 'smith@example.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);

        // Get the first patient
        $pasien = Pasien::first();

        // Create medical records
        RekamMedis::create([
            'pasien_id' => $pasien->id,
            'dokter_id' => $dokter->id,
            'tanggal_kunjungan' => now(),
            'diagnosa' => 'Flu dan demam',
            'catatan' => 'Pasien mengeluh demam dan batuk selama 3 hari',
        ]);

        // Create another medical record
        RekamMedis::create([
            'pasien_id' => $pasien->id,
            'dokter_id' => $dokter->id,
            'tanggal_kunjungan' => now()->subDays(7),
            'diagnosa' => 'Sakit kepala',
            'catatan' => 'Pasien mengeluh sakit kepala dan pusing',
        ]);
    }
}
