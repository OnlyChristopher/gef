<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;


class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $dateformt;

    public function __construct(){
        $this->dateformt = date('Y-m-d');
    }

    public function index()
    {
        $proyectos =    DB::table('proyectos')
                        ->paginate(10);
        return view('proyectos.index', ['proyectos' => $proyectos]);

    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    return view('proyectos.create');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyectos = DB::table('proyectos')->where('id_proyecto','=',$id)->first();
        $actividades = DB::table('actividades')->where('id_proyecto','=',$id)->paginate(10);
        return view('proyectos.detail',  ['proyectos' => $proyectos, 'actividades' => $actividades]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	    $proyectos = DB::table('proyectos')->where('id_proyecto','=',$id)->first();

    	return view('proyectos.edit',  ['proyectos' => $proyectos]);

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
