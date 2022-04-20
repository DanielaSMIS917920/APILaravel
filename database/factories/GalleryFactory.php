<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'Nombre'=>$this->faker->text(50),
            'Tipo'=>$this->faker->text(50),
            'Descripcion'=>$this->faker->text(100),
            'Genero'=>$this->faker->text(50)
        ];
    }
}
