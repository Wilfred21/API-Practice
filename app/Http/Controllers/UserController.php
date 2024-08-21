<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ApiService;

class UserController extends Controller
{
    public function userList()
    {
        $rest = ApiService::userList(); //llamamos el metodo de la funcion 


        if ($rest->successful()) {

            $users = $rest->object(); //Guardamos los datos del Objeto en la variable Users
            $data = [
                "users" => $users
            ];


            return view('getUsers', $data);
        } else {

            return redirect()->route('login')->withFail("Error Fatal");
        }
    }

//Request se utiliza para optener un formulario 
    public function createUser(Request $request) //Request se utiliza para optener los datos del usuario 
    {


        $request->validate([

            'txtName' => 'required',
            'txtLasName' => 'required',
            'txtUserEmail' => 'required|email',
            'txtPhone' => 'required',
            'txtPassword' => 'required',
            'txtWorkStation' => 'required',
            'txtStation' => 'required',

        ]);
        $user = [
            'Id' => 0,
            'Name' => $request->txtName,
            'LastName' => $request->txtLasName,
            'Email' => $request->txtUserEmail,
            'Phone' => $request->txtPhone,
            'Password' => $request->txtPassword,
            'Workstation' => $request->txtWorkStation,
            'Status' => $request->txtStation,
        ];



        $rest = ApiService::createUser($user);


        if ($rest->successful()) {

     
            return redirect()->route('rutUserList')->with('success', 'Usuario guardado correctamente.');
            
        } else {

           
            return redirect()->route('rutUserList')->with('error',$rest->object());
           
        }
       
        
    }
}
