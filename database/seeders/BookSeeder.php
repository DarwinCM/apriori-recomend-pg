<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use App\Models\Image;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $libros = Book::factory(120)->create();

        foreach ($libros as $libro) {
            Image::factory(1)->create([
                'imageable_id' => $libro->id,
                'imageable_type' => Book::class
            ]);
        }
    }
}
