<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PatientDoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DoctorPatient::factory(50)->create();
    }
}
