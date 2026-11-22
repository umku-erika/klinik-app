<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        Patient::create([
            'medical_record_number' => 'RM0001',
            'name' => 'Ahmad',
            'gender' => 'L',
            'birth_date' => '2000-05-10',
            'address' => 'Kudus',
            'phone' => '0812345678',
        ]);
    }
}