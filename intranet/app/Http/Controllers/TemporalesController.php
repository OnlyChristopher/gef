<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TemporalesController extends Controller
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
        $temporales = DB::table('temporales')
                        ->join('clientes', 'clientes.id_cliente', '=', 'temporales.id_cliente')
                        ->select('temporales.*','clientes.nombre_cliente')
	                    ->paginate(10);


        return view('proyectos.temporales.index', ['temporales' => $temporales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$clientes = DB::table('clientes')->get();
	    return view('proyectos.temporales.create', ['fecha' => $this->dateformt, 'clientes' => $clientes]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente            = $request->input('cliente');
        $proyecto           = $request->input('proyecto');
        $comentarios        = $request->input('comentarios');
        $fecha              = $request->input('fecha');
        $documento          = $request->documento->getClientOriginalName();
        $id_user            = $request->input('id_user');
        $fecha_creacion     = $this->dateformt;

        $request->documento->storeAs('temporales/'.$cliente,$documento);

        $data =     array('id_cliente'          => $cliente,
	                        'proyecto'          => $proyecto,
	                        'nombre_archivo'    => $documento,
	                        'comentarios'       => $comentarios,
	                        'fecha_carga'       => $fecha,
	                        'documento'         => $documento,
	                        'usuario_creacion'  => $id_user,
	                        'fecha_creacion'     => $fecha_creacion);

        DB::table('temporales')->insert($data);

	    return redirect()->route('temporales.index')
	                     ->with('success', 'Registro Exitoso');


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
        $temporales = DB::table('temporales')
                        ->where('id_temporal', $id)
                        ->first();
        $clientes = DB::table('clientes')->get();


        return view('proyectos.temporales.edit', [ 'temporales' => $temporales, 'clientes' => $clientes, 'fecha' => $this->dateformt]);
    }

	public function file($id)
	{
		$dl = DB::table('temporales')->where('id_temporal', $id)->first();
		return response()->download("../intranet/storage/app/temporales/$dl->id_cliente/$dl->documento");
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
        DB::table('temporales')->where('id_temporal',$id)->delete();
        return redirect()->route('temporales.index')
	        ->with('succes', 'Registro eliminado correctamente');
    }
}
