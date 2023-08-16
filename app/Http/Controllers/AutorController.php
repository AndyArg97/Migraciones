<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Noticia;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index(Request $request)

    {
        $autores = Autor::with('noticias')->get();
        return view('mostrar', compact('autores'));
    }

    public function cargarDatos(Request $request)

    {
        $autor = Autor::find(1);
        $noticia1 = new Noticia;
        $noticia1->titulo = "Bolivar pasa a cuartos";
        $noticia1->contenido = "Bolivar le gano a los brazucas incluso siendo robado";
        $noticia2 = new Noticia;
        $noticia2->titulo = "Boca pasa a cuartos";
        $noticia2->contenido = "Boca Juniors gano en penales";
        $autor = $autor->noticias()->saveMany([$noticia1, $noticia2]);
    }

   /* public function eliminarNoticias(Request $request, $id)

    {
        $autor = Autor::find($id);
        if (!$autor) {
            return redirect()->back()->with('error', 'Autor no encontrado');
        }
        $autor->noticias()->delete();
        return redirect()->back()->with('success', 'Noticias eliminadas exitosamente');
    }
    */
}


