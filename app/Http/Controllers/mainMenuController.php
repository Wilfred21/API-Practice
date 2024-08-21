<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ApiService;

class mainMenuController extends Controller
{
    public function login()
    {
        return view('loginUser');
    }

    public function doLogin(Request $request)//Metodo para optener datos del view
    {
      
//validamos los campos 
        $request->validate([

            'txtUserEmail' => 'required|email',
            'txtPassword' => 'required',
        ]);
        $email = $request-> txtUserEmail;
        $password = $request-> txtPassword;


        $rest = ApiService::login($email,$password);

      

        if($rest->successful()){

            return redirect()->route('rutUserList');

        }else{

            return redirect()->route('login')->withFail("Error Fatal");
        }




    }
}
