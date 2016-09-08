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
	public function index(){
		$vista=view('seccion.index');
		return $vista;
	}
	public function personal(){
		$tipos=tipo::All();
        $vista=view('seccion.Personal.principal',['tipos'=>$tipos]);
        return $vista;
	}
	public function abrirSeccion($seccion){
		switch($seccion){
			case 'inicio':
				$seccion=view('seccion.index');
				break;
			case 'investigaciones':
				$investigaciones=$this->obtenerInvestigaciones();
				$seccion=view('seccion.Investigacion.inicio',
							['investigaciones'=>$investigaciones]);
				break;
			case 'participantes':
				$tipos=tipo::All();
        		$seccion=view('seccion.Personal.principal',['tipos'=>$tipos]);
        		break;
        	case 'multimedia':
        		$seccion=view("seccion.Multimedia.multimedia");
        		break;
        	case 'blog':
        		$seccion=view("seccion.Blog.blog");
        		break;
        	case 'instalaciones':
        		$seccion=view("seccion.Instalacion.instalacion");
        		break;
        	case 'contacto':
        		$seccion=view("seccion.Contactos.contacto");
        		break;
		}
		return $seccion;
	}
	public function verPersonal($seccion,$personal){
		$tipos=tipo::All();
		$participantes=Usuario::join('trabajo','usuario.id','=',
									'trabajo.usuario_id')
			->join('area','area.id','=','trabajo.area_id')
			->join('personal','usuario.id','=','personal.usuario_id')
			->join('tipo','tipo.id','=','personal.tipo_id')
			->select('usuario.nombre as NOMBRE','usuario.carrera as CARRERA', 			'usuario.correo as CORREO', 'usuario.foto as FOTO',
				DB::raw('GROUP_CONCAT(area.nombre SEPARATOR ", ") AS "AREAS" ') )
			->where('tipo.nombre_tipo','=',$personal)
			->groupBy('usuario.id')
			->get();
		$vista=view('seccion.Personal.participantes',
						["participantes"=>$participantes, 
						"tipos"=>$tipos,
						"personal"=>$personal]);
		return $vista;
	}
	public function obtenerInvestigaciones(){
		$investigaciones=Investigacion::join('desarrollo','investigacion.id','=','desarrollo.investigacion_id')
					->join('area','area.id','=','desarrollo.area_id')
					->select('investigacion.nombre as Investigacion',
						DB::raw('GROUP_CONCAT(area.nombre SEPARATOR ",") as "Areas"'))
					->groupby('investigacion.id')
					->get();
		return $investigaciones;
	}
	public function mostrarArticulos($area){
		$articulos=Investigacion::join('desarrollo','investigacion.id','=','desarrollo.investigacion_id')
			->join('area','area.id','=','desarrollo.area_id')
			->join('articulo','area.id','=','articulo.area_id')
			->select('articulo.titulo','articulo.descripcion')
			->where('area.nombre','=',$area)
			->groupBy('area.id')
			->get();
		$investigaciones=$this->obtenerInvestigaciones();
		$vista=view('seccion.Investigacion.lista_articulos',
						["investigaciones"=>$investigaciones,
						"articulos"=>$articulos]);
		return $vista;
	}
}