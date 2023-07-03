<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Http;
use Mockery\Undefined;

class ProductsController extends Controller
{
  public function store(ProductRequest $request) {

    $dados = $request->validated();
    dd($dados);
    $dados_enviados = $dados['dados'];
    $url = "http://localhost:5000/products";
    $produtos = Http::post($url)->json();
    return view('products', ['products' => $produtos]);
  }

    public function request() {
    $url = "http://localhost:5000/products";
    $produtos = Http::get($url)->json();
    return view('products', ['products' => $produtos]);
  }

  public function delete($id) {

    $url = "http://localhost:5000/products/{{$id}}";
    $produtos = Http::delete($url)->json();
    return view('products', ['products' => $produtos]);
  }
}
