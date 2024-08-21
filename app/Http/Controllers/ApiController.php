<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getUsers()
    {
        // URL del endpoint de la API
        $apiUrl = 'http://localhost:5135/GetUsers'; //

        // Realizar la solicitud GET a la API
        $response = Http::get($apiUrl);

        // Verificar si la respuesta es exitosa
        if ($response->successful()) {
            // Decodificar la respuesta JSON
            $users = $response->json();

            // Retornar los datos (puedes pasarlos a una vista o devolverlos como JSON)
            return response()->json($users);
        } else {
            // Manejar el caso en que la API no responde correctamente
            return response()->json(['error' => 'No se pudo conectar con la API'], $response->status());
        }
    }
}
