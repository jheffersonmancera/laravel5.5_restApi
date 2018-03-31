<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\DataUser;
Use App\Postbody;

class DataUserController extends Controller
{
    public function __construct()
    {
       //$this->middleware('CheckRequest');
    }
    public function index()
    {
//		Respuesta dinámica con base de datos:
//      $datauser = DataUser::all();
//      return  $datauser;

//		filtrar respuesta
    	$datauser = DataUser::select('name','email')->get();
    	return  response()->json($datauser);


        //Respuesta estática sin base de datos:
        /*$datauser = response()->json(['name' =>'Jhefferson Mancera','email'=>'jheffersonmancera@gmail.com','endpoint'=>'http://localhost/proyectos_laravel/laravel5.5_restapi_netireki/public/api/datauser']);

        return $datauser;*/
    }
    public function store(Request $request){
    
 			/*$postbody = $request->all();
 			return response()->json($postbody);*/

 			/*$postbody = Postbody::create($request->all());
       		return response()->json($article, 201);*/

       		


           	
    }



}
