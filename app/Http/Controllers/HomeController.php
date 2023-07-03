<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
  public function request() {
    $url = "http://localhost:5000/products";
    $produtos = Http::get($url)->json();
    return view('home', ['products' => $produtos]);
  }
}
