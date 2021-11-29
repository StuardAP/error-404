<?php

namespace Database\Factories;

use App\Models\Administrator;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdministratorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Administrator::class;

    public function definition()
    {
        $array_uuid_administrator=Employee::where('employee_profession','administrator')->pluck('uuid')->toArray();
        $array_discipline=array('Good','Fair','Poor');
          return [

            'administrator_id'=>$this->faker->unique()->randomElement($array_uuid_administrator),
            'administrator_discipline'=>$this->faker->randomElement($array_discipline),
        ];
    }

}
