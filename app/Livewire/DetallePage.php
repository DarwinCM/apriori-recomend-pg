<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\Calificacion;
use App\Models\Transacciones;
use Illuminate\Support\Facades\Auth;

class DetallePage extends Component
{
  public $libro;          // Datos del libro actual
  public $calificacion;

  public $mensaje = '';

  public function mount($id)
  {
    // Cargar el libro correspondiente
    $this->libro = Book::findOrFail($id);

    $viewedLibros = session()->get('guardar_libros', []);

    // Ensure no duplicates
    if (!in_array($id, $viewedLibros)) {
      $viewedLibros[] = $id;
    }

    session()->put('guardar_libros', $viewedLibros);

    // If the user has viewed at least 5 Libros, save the transaction
    if (count($viewedLibros) >= 5) {
      $this->storeTransaction($viewedLibros);
      $this->mensaje = '¡Felicidades! tienes nuevas recomendaciones';
    }

    // Cargar la calificación existente del usuario
    $userCalificacion = Calificacion::where('book_id', $this->libro->id)
      ->where('user_id', Auth::id())
      ->first();

    $this->calificacion = $userCalificacion ? $userCalificacion->calificacion : null;
  }
  public function storeTransaction($viewedLibros)
  {
    // Avoid duplicate transactions
    if (Transacciones::where('user_id', Auth::user()->id)->where('libros', json_encode($viewedLibros))->exists()) {
      return;
    }

    // Save the transaction
    $transaction = new Transacciones();
    $transaction->user_id = Auth::user()->id;
    $transaction->libros = json_encode($viewedLibros);
    $transaction->save();

    session()->forget('guardar_libros');

    return response()->json(['message' => 'Transacción guardada correctamente']);
  }

  public function calificar()
  {
    // Verificar si el usuario está autenticado
    if (!Auth::check()) {
      session()->flash('error', 'Debes iniciar sesión para calificar.');
      return;
    }
    // Validar que la calificación sea válida
    $this->validate([
      'calificacion' => 'required|integer|min:1|max:5',
    ]);

    $userId = Auth::id();

    // Verificar si ya existe una calificación
    $existingCalificacion = Calificacion::where('book_id', $this->libro->id)
      ->where('user_id', $userId)
      ->first();

    if ($existingCalificacion) {
      // Actualizar calificación existente
      $existingCalificacion->calificacion = $this->calificacion;
      $existingCalificacion->save();
    } else {
      // Crear nueva calificación
      Calificacion::create([
        'book_id' => $this->libro->id,
        'user_id' => $userId,
        'calificacion' => $this->calificacion,
      ]);
    }

    // Feedback opcional
    session()->flash('success', '¡Tu calificación ha sido registrada!');
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
    })->paginate(8);

    // Obtener recomendaciones basadas en el autor
    $recomendacionesPorAutor = Book::when($autor, function ($query) use ($autor) {
      $query->whereHas('author', function ($q) use ($autor) {
        $q->where('nombre', 'like', '%' . $autor . '%');
      });
    })->paginate(8);
    $mensaje = $this->mensaje;
    return view('pages.detalle-page', compact('recomendaciones', 'recomendacionesPorAutor','mensaje'));
  }

}