<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NotificacionesController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
    	$usuarios = DB::table('users')->get();
    	return view('notificaciones.create', ['usuarios' => $usuarios, 'temporales' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_temporal        = $request->input('id_temporal');
        $id_users           = $request->input('usuario_id');
        $comentarios        = $request->input('comentarios');
        $usuario_creacion   = $request->input('id_user');

        foreach ($id_users as $id_user){
			$data[] = array('id_temporal' => $id_temporal,
			                'id_user' => $id_user,
			                'comentarios' => $comentarios,
			                'usuario_creacion' => $usuario_creacion,
			                'fecha_creacion' => $this->dateformt);
		}
		//dd($data);
        DB::table('notificaciones')->insert($data);

        DB::table('temporales')->where('id_temporal', $id_temporal)->update(['notificacion' => 1]);


		return redirect()->route('temporales.index')
		                 ->with('success', 'Notificacion Registrada');
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
        //
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
