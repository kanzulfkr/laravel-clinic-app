<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Kanzul',
            'email' => 'kanzulwork@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'phone' => '089685122250',
        ]);

        //seeder profile_clinics manual
        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Klinik Ijul',
            'address' => 'Jl. Raya Ciputat Parung No. 1',
            'phone' => '1234567890',
            'email' => 'dr.kanzul@ijul.com',
            'doctor_name' => 'Dr. Kanzul',
            'unique_code' => '123456',
        ]);

        //call
        $this->call([
            DoctorSeeder::class,
            DoctorScheduleSeeder::class,
            PatientSeeder::class,
            ServiceMedicinesSeeder::class,
            PatientScheduleSeeder::class,
        ]);
    }
}
