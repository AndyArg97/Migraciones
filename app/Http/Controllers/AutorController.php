<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    // Consulta #1

    public function mostrarAutores() {
        $autores = Autor::all()->take(10);
        return Response()->json($autores);
    }

    // Consulta #2
    
    public function mostrarNoticias(Request $request, $autorId) {
        $noticias = Noticia::where('autor_id', $autorId)
        ->orderBy('created_at','desc')
        ->take(10)
        ->get();
        return Response()->json($noticias);
    }

    // Consulta #3

    public function insertarAutor(Request $request, $nombreAutor) {

        $autor = new Autor();
        $autor->nombre = $nombreAutor;
        $autor->cargo = Str::random(10);
        $autor->save();
        return Response()->json(['message' => 'Autor insertado exitosamente', 'data' => $autor], 201);
    }

    // Consulta #4

    public function buscarAutor(Request $request, $nombreAutor) {
        $autor = Autor::where('nombre',$nombreAutor)->first();
        return Response()->json(['data' => $autor], 200);
    }

    // Consulta #5

    public function contarNoticas(Request $request, $autorId) {
        $noticiasCount = Noticia::where('autor_id', $autorId)
        ->orderBy('created_at','desc')
        ->count();
        return Response()->json($noticiasCount);
    }

    // Consulta #6

    public function verificarAutorDeNoticia($noticiaId)
    {
        $noticia = Noticia::find($noticiaId);
        if (!$noticia) {
            return response()->json(['message' => 'Noticia no encontrada'], 404);
        }
        $autorDeNoticia = $noticia->autor;
        return response()->json(['autor' => $autorDeNoticia]);
    }
}


