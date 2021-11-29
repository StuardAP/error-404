<?php

namespace Database\Factories;
use App\Models\Designer;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class DesignerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Designer::class;
    public function definition()
    {
        $array_uuid_designer=Employee::where('employee_profession','designer')->pluck('uuid')->toArray();
        $array_creativity=array('Mimetic','bisociative','analogical','narrative','intuitive');
        $array_detailer=array('normal','intermediate','high');
        return [
            'designer_id'=>$this->faker->unique()->randomElement($array_uuid_designer),
            'designer_creativity'=>$this->faker->randomElement($array_creativity),
            'designer_detailer'=>$this->faker->randomElement($array_detailer),
        ];
    }
}
