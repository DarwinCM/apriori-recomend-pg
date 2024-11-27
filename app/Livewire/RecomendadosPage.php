<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Calificacion;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RecomendadosPage extends Component
{
    public $libro;
    public $calificacion;

    public function mount($id)
    {
        // Cargar el ID del libro desde la sesión
        $libroId = $id;

        // Verificar si el libro existe en la sesión
        if (!$libroId) {
            return redirect()->route('inicio')->with('error', 'No se encontró el libro.');
        }

        // Cargar el libro correspondiente
        $this->libro = Book::findOrFail($libroId);

        // Cargar la calificación existente del usuario
        $userCalificacion = Calificacion::where('book_id', $this->libro->id)
            ->where('user_id', Auth::id())
            ->first();

        $this->calificacion = $userCalificacion ? $userCalificacion->calificacion : null;
    }

    public function render()
    {
        // Obtener categoría y autor del libro actual
        $categoria = $this->libro->category->name;
        $autor = $this->libro->author->nombre;

        // Obtener recomendaciones basadas en la categoría
        $recomendaciones = Book::when($categoria, function ($query) use ($categoria) {
            $query->whereHas('category', function ($q) use ($categoria) {
                $q->where('name', 'like', '%' . $categoria . '%');
            });
        })->paginate(10);

        // Obtener recomendaciones basadas en el autor
        $recomendacionesPorAutor = Book::when($autor, function ($query) use ($autor) {
            $query->whereHas('author', function ($q) use ($autor) {
                $q->where('nombre', 'like', '%' . $autor . '%');
            });
        })->paginate(10);

        return view('pages.recomendados-page', compact('recomendaciones', 'recomendacionesPorAutor'));
    }
}
