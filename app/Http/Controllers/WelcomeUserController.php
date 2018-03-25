<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
   
	public function __invoke($name, $nickname = null){

		$name = ucfirst($name);//primera letra en mayuscula

    	if($nickname){
		
			return "Bienvenido {$name} el {$nickname}"; 
	
		}else{

			return "Bienvenido {$name}";

		}
    }


}
