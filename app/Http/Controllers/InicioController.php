<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use App\Models\User;


class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = User::all();

        $publicaciones = Publicacion::orderBy('id', 'desc')->get();
        return view('dashboard', compact('publicaciones','usuarios'));

    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosproductos = request()->except('_token');
        $datosproductos ['id_usuario'] = auth()->user()->id;
        if($request->hasFile('foto')){
            $datosproductos['foto']=$request->file('foto')->store('foto','public');
        }
        Publicacion::insert($datosproductos);

        return redirect('dashboard');


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
    public function perfil($id)
    {
        //
        $usuarios=User::findOrFail($id);
        $contador = User::all();
        $publicaciones = Publicacion::all();
        return view('perfil', compact('usuarios','contador','publicaciones'));
    }
    
    public function vista($id)
    {
        //
        $publicaciones=Publicacion::findOrFail($id);
        $contador = User::all();
        $usuarios = User::all();
        return view('vista-publicacion', compact('usuarios','contador','publicaciones'));
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
        //
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
