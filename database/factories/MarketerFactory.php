<?php

namespace Database\Factories;
use App\Models\Marketer;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarketerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Marketer::class;
    public function definition()
    {
        $array_uuid_marketer=Employee::where('employee_profession','marketer')->pluck('uuid')->toArray();
        $array_analysis=array('environment','social','economic','political','other');
        $array_planning=array('tactical','strategic','operational','logical','proactive');
        return [
           'marketer_id'=>$this->faker->unique()->randomElement($array_uuid_marketer),
           'marketer_analysis'=>$this->faker->randomElement($array_analysis),
           'marketer_planning'=>$this->faker->randomElement($array_planning),
        ];
    }
}
