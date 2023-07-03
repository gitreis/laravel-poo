<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiCepRequest;
use Illuminate\Support\Facades\Http;

class CepController extends Controller
{
  public function request(ApiCepRequest $request) {

    $dados = $request->validated();
    $cep = $dados['cep'];
    $url = "https://viacep.com.br/ws/{$cep}/json/";
    $api = Http::get($url)->json();

    return view('api', ['api' => $api]);
  }
}
