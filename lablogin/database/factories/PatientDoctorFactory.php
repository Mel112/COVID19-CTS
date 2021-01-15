<?php

namespace Database\Factories;

use App\Models\DoctorPatient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientDoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DoctorPatient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nickname' => $this->faker->firstname,
            'doctor_id' => $this->faker->numberBetween($min=1, $max=50),
            'patient_id' => $this->faker->numberBetween($min=1, $max=20)
        ];
    }
}
