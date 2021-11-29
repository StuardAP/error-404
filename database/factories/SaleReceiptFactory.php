<?php

namespace Database\Factories;
use App\Models\SaleReceipt;
use App\Models\Administrator;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleReceiptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=SaleReceipt::class;
    public function definition()
    {
        $array_uuid_administrator=Administrator::pluck('administrator_id')->toArray();
        $array_uuid_client=Client::pluck('uuid')->toArray();
        return [
            'administrator_id'=>$this->faker->unique(true,10000)->randomElement($array_uuid_administrator),
            'client_id'=>$this->faker->unique()->randomElement($array_uuid_client),
            'sales_receipts_date'=>$this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
