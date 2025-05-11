<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Patient::factory()->create([
            'name' => 'Test Patient',
            'phone' => '555-0100',
            'birthdate' => '1990-01-01',
            'gender' => 'female'
        ]);

        // Or create multiple random patients
        \App\Models\Patient::factory(5)->create();
    }
}
