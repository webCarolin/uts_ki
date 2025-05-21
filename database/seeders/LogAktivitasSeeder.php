<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LogAktivitas;
use App\Models\User;

class LogAktivitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Get admin user
        $admin = User::where('role', 'admin')->first();

        // Create activity logs
        LogAktivitas::create([
            'user_id' => $admin->id,
            'aksi' => 'Login ke sistem',
            'entitas' => 'User',
            'entitas_id' => $admin->id,
            'waktu' => now(),
        ]);

        LogAktivitas::create([
            'user_id' => $admin->id,
            'aksi' => 'Membuat data pasien baru',
            'entitas' => 'Pasien',
            'entitas_id' => 1,
            'waktu' => now()->subHours(2),
        ]);

        LogAktivitas::create([
            'user_id' => $admin->id,
            'aksi' => 'Mengupdate data rekam medis',
            'entitas' => 'RekamMedis',
            'entitas_id' => 1,
            'waktu' => now()->subHours(1),
        ]);
    }
}
