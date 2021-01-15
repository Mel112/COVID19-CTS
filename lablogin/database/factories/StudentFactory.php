<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'FirstName'=> $this->faker->firstName,
            'LastName'=> $this->faker->lastName,
            'Gender'=> $this->faker->randomElement(['Male', 'Female']),
            'YearLevel'=> $this->faker->randomElement($array = array ('1','2','3','4','5')),
            'Program'=> $this->faker->randomElement(['BSIS', 'BSCS', 'BSIT', 'BSEMC']),
            'Address'=> $this->faker->address,
        ];
    }
}
