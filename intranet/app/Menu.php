<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Menu extends Model
{
	public static function menu(){
		$menus = new Menu();
		$menupadres = DB::table('menu')
		                ->where('id_menu', 'like', '02.%.00')
		                ->where('obs_menu', '<>', 'principal')
		                ->get();
		$opciones[] = $menupadres;
		foreach ($menupadres as $menupadre){
			$menuhijos[] = DB::table('menu')
			                 ->where(DB::raw('left(id_menu,5)'),'=',DB::raw('left("'.$menupadre->id_menu.'",5)'))
			                 ->where(DB::raw('right(id_menu,6)'),'<>',DB::raw('right("'.$menupadre->id_menu.'",6)'))
			                 ->where('obs_menu', '<>', 'principal')
			                 ->get();
		}
		$opciones[] = $menuhijos;
		//dd($opciones);
		return $menus->opciones=$opciones;
	}

}
