<?php

namespace App\Http\Controllers\Admin;

use App\Films;
use App\Season;
use App\Series;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Http\Requests\Admin\Season as SeasonRequest;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seasons = Season::orderBy('id', 'DESC')->get();


        return view('admin.season.index', [
            'seasons' => $seasons
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $series = Series::orderBy('title')->get();

        if (!empty($request->serie)) {
            $serie = Series::where('id', $request->serie)->first();
        }

        return view('admin.season.create', [
            'series' => $series,
            'selected' => (!empty($serie) ? $serie : null)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeasonRequest $request)
    {
        $seasonCreate = Season::create($request->all());

        return redirect()->route('admin.season.edit', [
            'season' => $seasonCreate->id
        ])->with(['color' => 'green', 'message' => 'Temporada criada com sucesso']);

        // var_dump($seasonCreate->getAttributes());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $season = Season::where('id', $id)->first();
        $series = Series::orderBy('title')->get();

        // Se existir o usuário e for diferente de vazio ele vai me retornar 1 usuário
        if(!empty($request->series)) {
            $series = Series::where('id', $request->serie)->first();
        }

        return view('admin.season.edit', [
            'season' => $season,
            'series' => $series,
            'selected' => (!empty($serie) ? $serie : null)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $seasons = Season::where('id', $id)->first();

        $seasons->fill($request->all())->first();

        $seasons->save();

        return redirect()->route('admin.season.edit', [
            'seasons' => $seasons->id
        ])->with(['color' => 'green', 'message' => 'Temporada atualizada com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $season = Season::find($id)->delete();

        return response()->json(['success'=>'Temporada deletada com sucesso!']);

    }
}
