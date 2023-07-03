<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubcategoriesController extends Controller
{
  public function request() {
    $url = "http://localhost:5000/subcategories";
    $subcategories = Http::get($url)->json();
    return view('subcategories', ['subcategories' => $subcategories]);
  }
}
