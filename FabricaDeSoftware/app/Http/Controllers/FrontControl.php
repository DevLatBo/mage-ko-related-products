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
		return view("seccion.investigaciones");
	}
	public function personal(){
		$tipos=tipo::All();
        $vista=view('seccion.personal',['tipos'=>$tipos]);
        return $vista;
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
}
