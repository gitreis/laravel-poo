<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
  public function request() {
    $url = "http://localhost:5000/users";
    $usuarios = Http::get($url)->json();
    return view('users', ['users' => $usuarios]);
  }
}
