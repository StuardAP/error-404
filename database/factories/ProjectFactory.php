<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Project;
use App\Models\Employee;
use App\Models\Client;


class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Project::class;
    public function definition()
    {   $array_uuid_developer=Employee::where('employee_profession','developer')->pluck('uuid')->toArray();
        $array_uuid_designer=Employee::where('employee_profession','designer')->pluck('uuid')->toArray();
        $array_uuid_marketer=Employee::where('employee_profession','marketer')->pluck('uuid')->toArray();
        $array_uuid_client=Client::pluck('uuid')->toArray();
        $array_employee=array_merge($array_uuid_developer,$array_uuid_designer,$array_uuid_marketer);
        return [
            'employee_id'=>$this->faker->unique(true,10000)->randomElement($array_employee),
            'client_id'=>$this->faker->unique()->randomElement($array_uuid_client),
            'project_comments'=>$this->faker->text(50),
            'project_start'=>now(),
            'project_final'=>$this->faker->dateTimeBetween('0 years','+30 days'),
            'project_status'=>$this->faker->randomElement(['active','inactive','cancelled']),
        ];
    }
}
