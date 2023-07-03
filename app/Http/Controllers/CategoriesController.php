<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoriesController extends Controller
{
  public function request() {
    $url = "http://localhost:5000/categories";
    $categories = Http::get($url)->json();
    return view('categories', ['categories' => $categories]);
  }
}
