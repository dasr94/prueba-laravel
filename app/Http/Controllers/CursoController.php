<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    //
    public function index(){

        $cursos = Curso::paginate();
        return view('cursos.index', compact('cursos'));
        // return $cursos;
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){

        /* $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->save(); */
        /* OTRA FORMA: */
        /* $curso = Curso::created([
            'name' => $request->name,
            'descripcion' => $request->descripcion
        ]); */
        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso')); 
    }

    public function update(Curso $curso, Request $request){

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required'
        ]);

        /* $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->save(); */

        /**
         * SE ACCEDE AL OBJETO, ya se tiene en la declaracion de los parametros de la funcion
         */

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }


    public function destroy(Curso $curso){
        return $curso->delete();
    }
}
