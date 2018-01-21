<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ardi;
class ardiController extends Controller
{
    public function template1()
    {
		return view('layout.master');    	
    }
    public function template2()
    {
		return view('layout.galeri');    	
    }
    public function template3()
    {
    	$a= ardi::all();
		return view('tabel', compact('a'));    	
    }
    public function template4()
    {
		return view('layout.paragraf');    	
    }
    public function template5()
    {
        return view('layout.custom');     
    }
    public function template6()
    {
        $a= ardi::all();
        return view('tabel1', compact('a'));     
      
    }

}
