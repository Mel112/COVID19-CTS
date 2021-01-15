<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname'=>$this->faker->firstname,
            'lastname'=>$this->faker->lastname,
            'age'=>$this->faker->numberBetween($min=1, $max=99),
            'gender'=>$this->faker->randomElement(['Male', 'Female']),
            'region'=>$this->faker->randomElement(['Region I', 'Region II', 'Region III', 'Region IV-A', 'Region IV-B',
                'Region V', 'CAR', 'NCR', 'Region VI', 'Region VII', 'Region VIII', 'Region IX', 'Region X', 'Region XI',
                'Region XII', 'Region XIII', 'ARMM']),
            'phonenumber'=>$this->faker->e164phonenumber
        ];
    }
}
