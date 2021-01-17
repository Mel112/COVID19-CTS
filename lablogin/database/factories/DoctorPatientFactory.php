<?php

namespace Database\Factories;

use App\Models\DoctorPatient;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorPatientFactory extends Factory
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
            'phonenumber'=>$this->faker->e164PhoneNumber,
            'region'=>$this->faker->randomElement(['Region I', 'Region II', 'Region III', 'Region IV-A', 'Region IV-B',
                'Region V', 'CAR', 'NCR', 'Region VI', 'Region VII', 'Region VIII', 'Region IX', 'Region X', 'Region XI',
                'Region XII', 'Region XIII', 'ARMM']),
            'doctor_id' => $this->faker->numberBetween($min=1, $max=50),
            'patient_id' => $this->faker->numberBetween($min=1, $max=20)
        ];
    }
}
