<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Price;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tour;
use Illuminate\Support\Str;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //para el campo slug
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'description_corta' => $this->faker->text(200),
            'description_larga' => $this->faker->paragraph(),
            'duracion_horas' => $this->faker->numberBetween(1, 8),
            'hora_inicio' => $this->faker->time(),
            'hora_fin' => $this->faker->time(),
            'max_personas' => $this->faker->numberBetween(10, 50),
            'min_personas' => $this->faker->numberBetween(1, 9),
            'imagen' => $this->faker->imageUrl(),
            'estatus' => $this->faker->randomElement([Tour::BORRADOR, Tour::REVISION, Tour::PUBLICADO, Tour::INACTIVO]),
            'slug' => Str::slug($title),
            'idioma' => $this->faker->randomElement(['Español', 'Inglés', 'Francés']), // Asumiendo que estos son los idiomas disponibles
            'informacion_adicional' => $this->faker->optional()->paragraph(),
            'politicas_cancela' => $this->faker->optional()->paragraph(),
            'recomendaciones' => $this->faker->optional()->paragraph(),
            'precio' => $this->faker->randomFloat(2, 50, 1000), // Precio aleatorio entre 50 y 500
            'stock' => $this->faker->numberBetween(2, 50, 1000),
            //'user_id' => User::all()->random()->id, // Asigna un usuario aleatorio
            'category_id' => Category::all()->random()->id, // Asigna una categoria aleatoria
            //'price_id' => Price::all()->random()->id, // Asigna un precio aleatorio
        
        ];
    }
}
