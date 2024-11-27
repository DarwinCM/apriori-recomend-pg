<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Recoment;
use App\Models\Transacciones;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Generate extends Component
{
    public function render()
    {
        $userLogin = Auth::user();
        $transactions = Transacciones::where('user_id', $userLogin->id)->get();

        // Inicializar recomendaciones como un array vacío
        $recommendations = [];

        // Si hay transacciones previas, buscar productos recomendados
        if (!$transactions->isEmpty()) {
            foreach ($transactions as $transaction) {
                $libros = json_decode($transaction->libros);

                foreach ($libros as $libroId) {
                    $libro = Book::find($libroId);
                    if ($libro) {
                        // Obtener productos similares y agregarlos a las recomendaciones
                        $similarLibros = $this->findSimilarProducts($libro);
                        foreach ($similarLibros as $similarLibro) {
                            $recommendations[] = $similarLibro;
                        }
                    }
                }
            }

            // Eliminar duplicados
            $recommendations = array_unique($recommendations, SORT_REGULAR);

            // Guardar recomendaciones en la base de datos si hay productos recomendados
            if (!empty($recommendations)) {
                Recoment::create([
                    'user_id' => $userLogin->id,
                    'recomendar_libros' => json_encode(array_column($recommendations, 'id')),
                ]);
            }
        }

        // Pasar las recomendaciones a la vista
        return view('livewire.generate', compact('recommendations'));
    }


    public function findSimilarProducts($product)
    {
        // Obtener productos similares por nombre o categoría sin convertirlos a array
        return Book::where('id', '!=', $product->id)
            ->where(function ($query) use ($product) {
                $query->where('title', 'like', '%' . $product->title . '%') // Cambiado a 'nombre'
                    ->orWhere('category_id', $product->category_id);
            })
            ->get(); // Mantén esto como una colección
    }
}
