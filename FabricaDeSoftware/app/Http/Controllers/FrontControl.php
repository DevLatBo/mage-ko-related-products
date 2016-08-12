<?php

namespace Fabrica\Http\Controllers;

use Illuminate\Http\Request;
use Fabrica\tipo;
use Fabrica\Http\Requests;
use Fabrica\Usuario;
use Fabrica\Area;

class FrontControl extends Controller
{
    public function index(){
    	return view("seccion.index");
    }
	public function investigacion(){
		return view("seccion.Investigacion.investigaciones");
	}
	public function personal(){
		$tipos=tipo::All();
        $vista=view('seccion.Personal.principal',['tipos'=>$tipos]);
        return $vista;
	}
	public function multimedia(){
		return view("seccion.Multimedia.multimedia");
	}
	public function blog(){
		return view("seccion.Blog.blog");
	}
	public function instalacion(){
		return view("seccion.Instalacion.instalacion");
	}
	public function contactos(){
		return view("seccion.Contactos.contacto");
	}
	public function verCientificos(){
		$tipos=tipo::All();
		$cientificos=Area::join('trabajo','area.id','=','trabajo.area_id')
			->join('usuario','usuario.id','=','trabajo.usuario_id')
			->join('personal','usuario.id','=','personal.usuario_id')
			->join('tipo','personal.tipo_id','=','tipo.id')
			->select('usuario.nombre as NOMBRE','usuario.correo as CORREO',
				'usuario.departamento as DEPARTAMENTO','usuario.foto',
				'area.nombre as AREA_DE_INVESTIGACION')
			->where('tipo.nombre_tipo','=','Cientifico')
			->get();
		$vista=view('seccion.Personal.cientifico',["cientificos"=>$cientificos,
													"tipos"=>$tipos]);
		return $vista;
	}
	public function verAdministrativos(){
		$tipos=tipo::All();
		$administrativos=Area::join('trabajo','area.id','=','trabajo.area_id')
			->join('usuario','usuario.id','=','trabajo.usuario_id')
			->join('personal','usuario.id','=','personal.usuario_id')
			->join('tipo','personal.tipo_id','=','tipo.id')
			->select('usuario.nombre as NOMBRE','usuario.correo as CORREO',
				'usuario.departamento as DEPARTAMENTO','usuario.foto',
				'area.nombre as AREA_DE_INVESTIGACION')
			->where('tipo.nombre_tipo','=','Administrativo')
			->get();
		$vista=view('seccion.Personal.administrativo',["administrativos"=>$administrativos,
													"tipos"=>$tipos]);
		return $vista;
	}
	public function verSoportes(){
		$tipos=tipo::All();
		$soportes=Area::join('trabajo','area.id','=','trabajo.area_id')
			->join('usuario','usuario.id','=','trabajo.usuario_id')
			->join('personal','usuario.id','=','personal.usuario_id')
			->join('tipo','personal.tipo_id','=','tipo.id')
			->select('usuario.nombre as NOMBRE','usuario.correo as CORREO','area.nombre as AREA_DE_INVESTIGACION')
			->where('tipo.nombre_tipo','=','Soporte')
			->get();
		$vista=view('seccion.Personal.soporte',["soportes"=>$soportes,
													"tipos"=>$tipos]);
		return $vista;
	}
	public function verHonorarios(){
		$tipos=tipo::All();
		$honorarios=Area::join('trabajo','area.id','=','trabajo.area_id')
			->join('usuario','usuario.id','=','trabajo.usuario_id')
			->join('personal','usuario.id','=','personal.usuario_id')
			->join('tipo','personal.tipo_id','=','tipo.id')
			->select('usuario.nombre as NOMBRE','usuario.correo as CORREO','area.nombre as AREA_DE_INVESTIGACION')
			->where('tipo.nombre_tipo','=','Honorario')
			->get();

		$vista=view('seccion.Personal.honorario',["honorarios"=>$honorarios,
													"tipos"=>$tipos]);
		return $vista;
	}
}
