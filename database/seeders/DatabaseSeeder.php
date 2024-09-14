<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'Kanzul',
            'email' => 'kanzul@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'phone' => '1234567890',
        ]);

        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Klinik Prizm',
            'address' => 'Jl. Raya Ciputat Parung No. 1',
            'phone' => '1234567890',
            'email' => 'dr.prizm@klinik.com',
            'doctor_name' => 'Dr. Prizm',
            'unique_code' => '123456',
        ]);

        $this->call([
            DoctorSeeder::class,
            DoctorScheduleSeeder::class,
            PatientSeeder::class,
        ]);
    }
}
