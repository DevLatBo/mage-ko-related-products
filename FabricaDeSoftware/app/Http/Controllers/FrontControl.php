<?php

namespace Fabrica\Http\Controllers;

use Illuminate\Http\Request;
use Fabrica\tipo;
use Fabrica\Http\Requests;
use Fabrica\Usuario;

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
		$cientificos=$this->obtenerDatos("Cientifico");
		$vista=view('seccion.Personal.cientifico',["cientificos"=>$cientificos,
													"tipos"=>$tipos]);
		return $vista;
	}
	public function verAdministrativos(){
		$tipos=tipo::All();
		$administrativos=$this->obtenerDatos("Administrativo");
		$vista=view('seccion.Personal.administrativo',["administrativos"=>$administrativos,
													"tipos"=>$tipos]);
		return $vista;
	}
	public function verSoportes(){
		$tipos=tipo::All();
		$soportes=$this->obtenerDatos("Soporte");
		$vista=view('seccion.Personal.soporte',["soportes"=>$soportes,
													"tipos"=>$tipos]);
		return $vista;
	}
	public function verHonorarios(){
		$tipos=tipo::All();
		$honorarios=$this->obtenerDatos("Honorario");
		$vista=view('seccion.Personal.honorario',["honorarios"=>$honorarios,
													"tipos"=>$tipos]);
		return $vista;
	}
	public function obtenerDatos($tipo){
		$datos=Usuario::join('personal','usuario.id','=','personal.usuario_id')
			->join('tipo','personal.tipo_id','=','tipo.id')
			->select('usuario.nombre','usuario.correo',
					'usuario.departamento','usuario.foto')
			->where('tipo.nombre_tipo','=',$tipo)
			->groupBy('usuario.id')
			->get();
		return $datos;
	}
}
