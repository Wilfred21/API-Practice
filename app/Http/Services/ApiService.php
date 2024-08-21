<?php

namespace App\Http\Services;


use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ApiService
{

  public static function login($email, $password)
  {
    // URL del endpoint de la API
    // Cambia a 'https://localhost:7210/GetUsers' si estás usando HTTPS

    // Realizar la solicitud GET a la API


    $response = Http::apiUrl()->get("/$email/$password"); //se envian los parametros por medio de la URL

    // Verificar si la respuesta es exitosa
    return $response;
  }

  public static function userList()
  {

    $response = Http::apiUrl()->get("/api/User");

    // Verificar si la respuesta es exitosa
    return $response; // Nos Regresa los datos 
  }

  public static function createUser($user)
  {

    $response = Http::apiUrl()->post("/api/User", $user);

    // Verificar si la respuesta es exitosa
    return $response; // Nos Regresa los datos 
  }
}
