<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){


    	//request('data');


		if(Request()->has('empty')){

			$users = [];

		}else{

			$users = [
				'Jerson','Yenderson','Yeferson','Arelis','Ahiram'
    		];
		}

    	/*return view('user')->with([
    		'users' => $users,
    		'title' => 'Listado de usuarios'
    	]);*/


    	$title = 'Listado de usuarios';

    	//dd(compact('title','users'));

    	return view('user.index', compact('title','users'));
    		/*->with('users',$users)
    		->with('title', 'Listado de usuarios');*/


    }

    public function show($id){

    	return view('user.show', compact('id'));
    	
    }

     public function create(){

    	return 'Crear nuevo usuario';
    }


}
