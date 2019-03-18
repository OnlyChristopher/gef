<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;

class CarpetasController extends Controller
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
    public function index($id)
    {
        $proyectos = DB::table('proyectos')
	                    ->where('id_proyecto','=',$id)
	                    ->first();
        return view('proyectos.carpetas.index', ['proyectos' => $proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
	    $proyectos = DB::table('proyectos')
	                   ->where('id_proyecto','=',$id)
	                   ->first();
	    $carpetas =  DB::table('carpetas_principales')
	                    ->get();
	    return view('proyectos.carpetas.create', ['proyectos' => $proyectos, 'carpetas' => $carpetas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $codigo         = $request->input('id_carpetaprincipal');
	    $nombre         = $request->input('nombre');
	    $id_proyecto    = $request->input('id_proyecto');
	    $nivel          = 1;
        $id_user        = $request->input('id_user');

		$data =   array('id_carpetaprincipal'   => $codigo,
                        'nombre'                => $nombre,
						'nivel'                 => $nivel,
						'usuario_creacion'      => $id_user,
						'fecha_creacion'        => $this->dateformt);

		$carpetas = DB::table('carpetas_principales')->where('id', '=', $codigo)->first();

	    Storage::disk('local')->makeDirectory('proyecto/'.$id_proyecto.'/'.$carpetas->nombre.'/'.$nombre,0775,true);

		DB::table('carpetas_secundarias')->insert($data);

	    return redirect()->route('carpetasProyectos', $id_proyecto)
	                     ->with('success','Registro Exitoso');
        //dd($request);
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

    public function carpetasSecundarias(Request $request)
    {
	   if($request->ajax()){
		    $carpetasSecundarias = DB::table('carpetas_secundarias')
						                ->where('id_proyecto', $request->id_proyecto)
							            ->where('id_carpetaprincipal', $request->codigo)
						                ->pluck("nombre","id")->all();
		    $data = view('proyectos.carpetas.ajax' ,compact('carpetasSecundarias'))->render();
		    return response()->json(['options'=>$data]);
	    }
    }

	public function file($id)
	{
		$proyectos = DB::table('proyectos')
		               ->where('id_proyecto','=',$id)
		               ->first();
		$carpetas =  DB::table('carpetas_principales')
		               ->get();
		return view('proyectos.carpetas.file', ['proyectos' => $proyectos, 'carpetas' => $carpetas]);
	}
	public function filestore(Request $request)
	{
		$id_carpetaprincipal    = $request->input('id_carpetaprincipal');
		$id_carpetasecundaria   = $request->input('id_carpetasecundaria');
		$id_proyecto            = $request->input('id_proyecto');
		$id_user               = $request->input('id_user');
		$file                   = $request->file->getClientOriginalName();

		$carpetaprincipal = DB::table('carpetas_principales')
								->where('id','=',$id_carpetaprincipal)
								->first();
		$carpetasecundaria = DB::table('carpetas_secundarias')
		                       ->where('id','=',$id_carpetasecundaria)
		                       ->first();

		$request->file->storeAs('proyecto/'.$id_proyecto.'/'.$carpetaprincipal->nombre.'/'.$carpetasecundaria->nombre, $file);

		$data = array('id_carpetasecundaria' => $id_carpetasecundaria,
		              'nombre' => $file,
		              'usuario_creacion' => $id_user,
		              'fecha_creacion' => $this->dateformt);

		DB::table('archivos_carpetas')->insert($data);


		return redirect()->route('carpetasProyectos',$id_proyecto)
		                 ->with('success', 'Registro Exitoso');
	}
}
