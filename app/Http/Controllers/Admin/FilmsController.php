<?php

namespace App\Http\Controllers\Admin;

use App\Films;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Films as FilmsRequest;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Films::orderBy('id', 'DESC')->get();
        return view('admin.films.index', [
            'films' => $films
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilmsRequest $request)
    {
        $filmsCreate = Films::create($request->all());

        return redirect()->route('admin.films.index', [
            'films' => $filmsCreate->id
        ])->with(['message' => 'Films Criado com sucesso']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Pegando o usuário e mandando para a página de edição
        $films = Films::where('id', $id)->first();

        /**  var_dump($user->document, $user->date_of_birth, $user->income, $user->spouse_document, $user-> spouse_date_of_birth, $user->spouse_income, $user->getAttributes());*/

        return view('admin.films.edit', [
            'films' => $films
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $films = Films::where('id', $id)->first();

        $films->fill($request->all());

        $films->save();

        return redirect()->route('admin.films.edit', [
            'films' => $films->id
        ])->with(['color' => 'green', 'message' => 'Filme atualizado com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Deletando um filme selecionado

        $films = Films::find($id)->delete();

       // return response()->json(['success'=>'Filme deletado com sucesso']);

        return redirect()->route('admin.films.index');
    }
}
