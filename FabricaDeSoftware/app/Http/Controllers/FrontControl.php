<?php

namespace Fabrica\Http\Controllers;

use Illuminate\Http\Request;

use Fabrica\Http\Requests;

class FrontControl extends Controller
{
    public function index(){
    	return view("seccion.index");
    }
	public function investigacion(){
		return view("seccion.investigaciones");
	}
	public function personal(){
		return view("seccion.personal");
	}
	public function multimedia(){
		return view("seccion.multimedia");
	}
	public function blog(){
		return view("seccion.blog");
	}
	public function instalacion(){
		return view("seccion.instalacion");
	}
	public function contactos(){
		return view("seccion.contacto");
	}
	public function formulario(){
		return view("Usuario.crear");
	}
	public function formularioInvestigacion(){
		return view("Investigacion.nuevainvestigacion");
	}
}
