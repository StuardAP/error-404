<?php

namespace Database\Factories;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Service::class;
    public function definition()
    {
        $service_marketing=array(
            'Social Media Manager',
            'Community Manager',
            'Analista Web',
            'Experto en SEM',
            'Consultor de SEO',
            'Productor de contenido',
            'Creador de contenido visual');

        $service_design=array(
            'Diseño de logotipo',
            'Diseño de marca',
            'Diseño de logotipo',
            'Diseño Editorial',
            'UX/UI',
            'Diseño de Envase',
            'Branding',
            'Diseño Tipográfico',
            'Animación 3D',
            'Ilustración',
            'Diseño Publicitario');

        $service_develop=array(
            'SGA (Software de gestión de almacén)',
            'TPV (Terminales en el Punto de Venta)',
            'BI (Bussines Inteligence)',
            'CRM (Customer Relationship Management)',
            'ERP (Enterpise Resource Planning)',
            'Página Web',
            'App movil(Android)');
        $all_services=array_merge($service_marketing,$service_design,$service_develop);
        // $service_select=$faker->randomElement($all_services);

        return [
            'category_id' =>$this->faker->numberBetween(1,3),
            'service_name'=>$this->faker->randomElement($all_services),
            'service_duration'=>$this->faker->numberBetween(1, 5),
            'service_cost'=>$this->faker->randomFloat(2,100,1500),
        ];
    }
}
