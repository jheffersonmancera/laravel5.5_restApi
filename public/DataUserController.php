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
    		//Prueba 5//probando con new FUNCIONANDO
    		$array=$request->all();
			$postbody = new Postbody;						//funcionando !!!!!!
			$postbody->json =json_encode($array);			//funcionando !!!!!!
        	$postbody->save();								//funcionando !!!!!!
			return response('Message Received');			//funcionando !!!!!!
 			

					 			//Prueba 1
					 			/*$postbody = $request->all();
					 			return response()->json($postbody);*/

					 			//Prueba 2- guardando json a database
					 			/*$postbody = $request->all();
					 			$postbody->json = json_encode(array('key' => 'value'));

					 			$postbody = Postbody::create($request->all());
					       		return response()->json($postbody, 201);*/

					       		//Prueba 3- guardando json a database convirtiendo en array
					       		

								//$array=$request->all();
								//2//$array=json_decode(json($request->all()),true);
					       		//$decodedtext=html_entity_decode($array);
					       		//$Array = json_decode($decodedtext, true);	
					       		//1//$postbody = Postbody::create(
					       			//['json' => '[1, 5, 7]']
					       			//
					       			//['json' => toarray($request->all())]
					       			//funcionando//['json' => '4']

								//1//);
								//1//return response()->json($array);



								//$postbody = new Postbody;
								//$postbody->json = json_encode(array('key' => 'value'));



					 			//$postbody->json = json_encode($request->all('key' => 'value'));// encode->aray to json decode-> json to array

					       		//return response()->json($postbody, 201);


					       		//Prueba 4- FUNCIONANDO - GUARDA CONOCIENDO EL KEY Y EL VLAUE
					 			//$postbody = Postbody::create($request->all());//funcional

					       		//return response()->json($postbody, 201);//funcional
					       		//return response()->json($postbody);//funcional sin codigo http
								//return response()->json_decode($postbody);//no funciona porque $postbody no es un formato json naturalmente
								//return response()->json_encode($postbody);//no funciona porque $postbody no es un valor 
					       		// fin funcional


       		
           	
    }



}
