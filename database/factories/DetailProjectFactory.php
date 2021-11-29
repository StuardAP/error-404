<?php

namespace Database\Factories;
use App\Models\DetailProject;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;
use App\Models\Service;
class DetailProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=DetailProject::class;
    public function definition()
    {   $array_project_uuid=Project::all()->pluck('uuid')->toArray();
        $array_services_uuid=Service::all()->pluck('uuid')->toArray();
        return [
            'project_id'=>$this->faker->randomElement($array_project_uuid),
            'service_id'=>$this->faker->randomElement($array_services_uuid),
        ];
    }
}
