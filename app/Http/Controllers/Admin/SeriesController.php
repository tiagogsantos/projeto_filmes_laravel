<?php

namespace App\Http\Controllers\Admin;

use App\Series;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** Trazendo o coletivo das series */
        $series = Series::orderBy('id', 'DESC')->get();

        return view('admin.series.index', [
            'series' => $series
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seriesCreate = Series::create($request->all());

        return redirect()->route('admin.series.edit', [
            'series' => $seriesCreate->id
        ])->with(['message' => 'Serie Criada com sucesso']);
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
        $series = Series::where('id', $id)->first();

            return view ('admin.series.edit', [
                'series' => $series
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
        // Buscando o series id no meu banco para realizar a atualização
        $series = Series::where('id', $id)->first();
        $series->fill($request->all());

        $series->save();

        return redirect()->route('admin.series.edit', [
            'series' => $series->id
        ])->with(['color' => 'green', 'message' => 'Série atualizada com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
