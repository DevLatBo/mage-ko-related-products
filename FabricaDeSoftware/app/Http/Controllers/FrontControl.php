<?php

namespace Fabrica\Http\Controllers;

use Illuminate\Http\Request;
use Fabrica\tipo;
use Fabrica\Http\Requests;
use Fabrica\Usuario;
use Fabrica\Area;
use Fabrica\Desarrollo;
use Fabrica\Investigacion;
use DB;

class FrontControl extends Controller
{
	public function personal(){
		$tipos=tipo::All();
        $vista=view('seccion.Personal.principal',['tipos'=>$tipos]);
        return $vista;
	}
	public function abrirSeccion($seccion){
		switch($seccion){
			case 'inicio':
				$vista=view('seccion.index');
				break;
			case 'investigacion':
				$investigaciones=Investigacion::select('nombre')
				->get();
				$vista=view("seccion.Investigacion.investigaciones",
							['investigaciones'=>$investigaciones]);
				break;
			case 'participantes':
				$tipos=tipo::All();
        		$vista=view('seccion.Personal.principal',['tipos'=>$tipos]);
        		break;
        	case 'multimedia':
        		$vista=view("seccion.Multimedia.multimedia");
        		break;
        	case 'blog':
        		$vista=view("seccion.Blog.blog");
        		break;
        	case 'instalaciones':
        		$vista=view("seccion.Instalacion.instalacion");
        		break;
        	case 'contacto':
        		$vista=view("seccion.Contactos.contacto");
        		break;
		}
		return $vista;
	}
	public function verCientificos(){
		$tipos=tipo::All();
		$cientificos=Usuario::join('trabajo','usuario.id','=','trabajo.usuario_id')
		->join('area','area.id','=','trabajo.area_id')
		->join('personal','usuario.id','=','personal.usuario_id')
		->join('tipo','tipo.id','=','personal.tipo_id')
		->select('usuario.nombre as NOMBRE','usuario.carrera as CARRERA', 			'usuario.correo as CORREO', 'usuario.foto as FOTO',
				DB::raw('GROUP_CONCAT(area.nombre SEPARATOR ", ") AS "AREAS" ') )
		->where('tipo.nombre_tipo','=','Cientifico')
		->groupBy('usuario.id')
		->get();
		$vista=view('seccion.Personal.cientifico',["cientificos"=>$cientificos,
													"tipos"=>$tipos]);
		return $vista;
	}
	public function verAdministrativos(){
		$tipos=tipo::All();
		$administrativos=Usuario::join('trabajo','usuario.id','=','trabajo.usuario_id')
			->join('area','area.id','=','trabajo.area_id')
			->join('personal','usuario.id','=','personal.usuario_id')
			->join('tipo','tipo.id','=','personal.tipo_id')
			->select('usuario.nombre as NOMBRE','usuario.carrera as CARRERA', 			'usuario.correo as CORREO', 'usuario.foto as FOTO',
					DB::raw('GROUP_CONCAT(area.nombre SEPARATOR ", ") AS "AREAS" ') )
			->where('tipo.nombre_tipo','=','Administrativo')
			->groupBy('usuario.id')
			->get();
		$vista=view('seccion.Personal.administrativo',["administrativos"=>$administrativos,
													"tipos"=>$tipos]);
		return $vista;
	}
	public function verSoportes(){
		$tipos=tipo::All();
		$soportes=Usuario::join('trabajo','usuario.id','=','trabajo.usuario_id')
			->join('area','area.id','=','trabajo.area_id')
			->join('personal','usuario.id','=','personal.usuario_id')
			->join('tipo','tipo.id','=','personal.tipo_id')
			->select('usuario.nombre as NOMBRE','usuario.carrera as CARRERA', 			'usuario.correo as CORREO', 'usuario.foto as FOTO',
					DB::raw('GROUP_CONCAT(area.nombre SEPARATOR ", ") AS "AREAS" ') )
			->where('tipo.nombre_tipo','=','Soporte')
			->groupBy('usuario.id')
			->get();
		$vista=view('seccion.Personal.soporte',["soportes"=>$soportes,
													"tipos"=>$tipos]);
		return $vista;
	}
	public function verHonorarios(){
		$tipos=tipo::All();
		$honorarios=Usuario::join('trabajo','usuario.id','=','trabajo.usuario_id')
			->join('area','area.id','=','trabajo.area_id')
			->join('personal','usuario.id','=','personal.usuario_id')
			->join('tipo','tipo.id','=','personal.tipo_id')
			->select('usuario.nombre as NOMBRE','usuario.carrera as CARRERA', 			'usuario.correo as CORREO', 'usuario.foto as FOTO',
					DB::raw('GROUP_CONCAT(area.nombre SEPARATOR ", ") AS "AREAS" ') )
			->where('tipo.nombre_tipo','=','Honorario')
			->groupBy('usuario.id')
			->get();

		$vista=view('seccion.Personal.honorario',["honorarios"=>$honorarios,
													"tipos"=>$tipos]);
		return $vista;
	}
}