<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;

class HomePage extends Component
{
    public $search;

    public $libroId;

    public function render(Request $request)
    {

        $query = Book::query();

        $query->where(function ($q) {
            $q->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('publication_date', 'like', '%' . $this->search . '%');
        });
        $libros = $query->paginate(6);

        if ($request->has('category')) {
            $query->where('category_id', $request->category);
        }
        
        // $librosPorCategoria = Book::select('category_id')->selectRaw('count(*) as total')
        // ->groupBy('category_id')->with('category')->get();


        $librosPorCategoria = Category::withCount('libros')->has('libros')->paginate(6);

        $newlibro = Book::orderBy('id','DESC')->take(8)->get();
        


        return view('pages.home-page',compact('libros','newlibro','librosPorCategoria'));
    }
   

    public function redirectOtraClase($item)
    {
        $id = $item['id'];

        session(['libro_id'=> $id ] );
        
        $libro = session('libro_id'); 
        // dd($libro);
        
      return Redirect()->route('detalle');
    }


}
