<?php

namespace Database\Factories;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Client::class;
    public function definition()
    {
        return [
            'client_dni'=>$this->faker->randomNumber(8),
            'client_name'=> $this->faker->name(),
            'client_lastname'=> $this->faker->lastName(),
            'client_phone'=> $this->faker->phoneNumber(),
            'client_address'=> $this->faker->address(),
        ];
    }
}
