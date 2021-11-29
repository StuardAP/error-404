<?php

namespace Database\Factories;
use App\Models\DetailSale;
use App\Models\SaleReceipt;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailSaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = DetailSale::class;
    public function definition()
    {   $array_sale_receipts=SaleReceipt::all()->pluck('sale_num')->toArray();
        $array_services=Service::all()->pluck('uuid')->toArray();
        return [
            'sale_receipts_num'=>$this->faker->randomElement($array_sale_receipts),
            'service_id'=>$this->faker->randomElement($array_services),
        ];
    }
}
