<?php

namespace Fabrica\Http\Controllers;

use Illuminate\Http\Request;
use Fabrica\tipo;
use Fabrica\Http\Requests;

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
}
