<?php

namespace Database\Factories;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;


class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Employee::class;

    public function definition()
    {
        return [
             'employee_dni'=>$this->faker->unique(true)->randomNumber(8),
             'employee_name'=> $this->faker->name(),
             'employee_lastname'=> $this->faker->lastName(),
             'employee_email'=> $this->faker->email(),
             'employee_phone'=> $this->faker->phoneNumber(),
             'employee_salary'=> $this->faker->randomFloat(2,1000,3000),
             'employee_profession'=> $this->faker->randomElement(['administrator', 'developer', 'designer','marketer','other']),
        ];
    }
}
