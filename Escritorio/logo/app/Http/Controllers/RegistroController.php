<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class RegistroController extends Controller
{
    public function vista() {
      $users = Users::all();

      $vac = compact("registro");
      return view("registro", $vac);
    }

    public function registro(Request $req) {
      $reglas = [
        "name" => "string|min:3|required",
        "email" => "required|email",
        "password" => "required"
      ];

      $mensajes = [
        "string" => "El campo :attribute debe ser un texto",
        "min" => "El campo :attribute tiene un mínimo de :min",
        "email" => "El campo :attribute debe ser un email"
      ];

      $this->validate($req, $reglas, $mensajes);

      $usuarioNuevo = new Users();

      $usuarioNuevo->name = $req["name"];
      $usuarioNuevo->email = $req["email"];
      $usuarioNuevo->password = $req["password"];

      $usuarioNuevo->save();

      return redirect("/registro");
    }
}
