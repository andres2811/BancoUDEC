<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Session;

class ListaController extends Controller
{
    public function hacer( Request $request)
    {
    	//recibir valores
    	$nombres= $request->input('nombre');
    	$apellidos= $request->input('apellido');
    	$cedulas= $request->input('cedula');
    	$ciudades= $request->input('ciudad');
    	$edades= $request->input('edad');
    	$tipo= $request->input('tipo');
           
 		


    	if (Session::has('matriz')) {
    		


            $vector_1 = Session::get('matriz');

            $vector_1[]=array(

                'nombre'=>$nombres,
                'apellido'=>$apellidos,
                'cedula'=>$cedulas,
                'ciudad'=>$ciudades,
                'edad'=>$edades,
                'tipo'=>$tipo,
                

            );

            Session::put('matriz',$vector_1);
            //echo "se inserto un nuevo valor";

    	}else{

             $vector_2[]=array(

                'nombre'=>$nombres,
                'apellido'=>$apellidos,
                'cedula'=>$cedulas,
                'ciudad'=>$ciudades,
                'edad'=>$edades,
                'tipo'=>$tipo,
                
            );

            Session::put('matriz',$vector_2);
            //echo "se creo una variable de sesion";


            $van=true;
            foreach (Session::get('matriz') as $vector_1) {

                foreach ($vector_1 as $key => $value) {

                    if ($vector_1['cedula']==$cedulas){
                        
                          $van=false;

                 }              
             }
             return $van;
		  }	
      }  		

        
        return view('master');
    }
}
