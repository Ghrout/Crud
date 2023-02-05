<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crud>
 */
class CrudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'razon_social' => $this->faker->sentence(),
            'nombre_comercial'=> $this->faker->sentence(),
            'nit_o_id'=> $this->faker->sentence(),
            'telefono'=> $this->faker->sentence(),
            'correo'=> $this->faker->sentence(),
            'sitio_web'=> $this->faker->sentence(),
            'image'=> $this->faker->image('public/storage/posts', 640, 480, null, false),
        ];
    }
}
