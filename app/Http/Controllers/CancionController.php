<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancion;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $canciones = Cancion::all();
        return view('cancion.index')->with('canciones', $canciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cancion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $canciones=new Cancion();
        $canciones->cancion=$request->get('cancion');
        $canciones->artista=$request->get('artista');
        $canciones->album=$request->get('album');
        $canciones->link=$request->get('link');

        $canciones->save();

        return redirect('/cancions');
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
        $cancion = Cancion::find($id);
        return view('cancion.edit')->with('cancion',$cancion);
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
        $cancion = Cancion::find($id);
        $cancion->cancion=$request->get('cancion');
        $cancion->artista=$request->get('artista');
        $cancion->album=$request->get('album');
        $cancion->link=$request->get('link');

        $cancion->save();

        return redirect('/cancions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cancion = Cancion::find($id);


        $cancion->delete();

        return redirect('/cancions');
    }
}
