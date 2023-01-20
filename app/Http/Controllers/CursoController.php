<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.Index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.Create');
    }

    public function store(StoreCurso $request)
    {
        $request->merge([
            'slug' => Str::slug($request->name),
        ]);
        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso)
    {
        return view('cursos.Show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(StoreCurso $request, Curso $curso)
    {
        $request->merge([
            'slug' => Str::slug($request->name),
        ]);
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index', $curso);
    }
}
