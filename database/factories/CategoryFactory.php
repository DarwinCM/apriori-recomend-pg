<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $categories = [
            'Terror',
            'Acción',
            'Aventura',
            'Romance',
            'Ciencia Ficción',
            'Fantasía',
            'Misterio',
            'Thriller',
            'Drama',
            'Comedia',
            'Biografía',
            'Autobiografía',
            'Historia',
            'Poesía',
            'Educación',
            'Ciencia',
            'Tecnología',
            'Filosofía',
            'Psicología',
            'Arte',
            'Viajes',
            'Negocios',
            'Economía',
            'Política',
            'Religión',
            'Autoayuda',
            'Infantil',
            'Juvenil',
            'Clásicos',
            'Novela Gráfica',
            'Cómics',
            'Ensayo',
            'Crónica',
            'Deportes',
            'Salud y Bienestar',
            'Gastronomía',
            'Fotografía',
            'Música',
            'Teatro',
            'Ecología',
            'Astrología',
            'Manualidades',
            'Hogar',
            'Novela Histórica',
            'Literatura Contemporánea',
        ];
        $name = $this->faker->unique()->randomElement($categories);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
