@extends('layout')

@section('title')
  <h1 class='text-4xl p-5 mt-10 mx-20 font-semibold  bg-zinc-700/10 border-zinc-900 border-double rounded-xl text-zinc-400 text-center'>
    Home
  </h1>
@endsection

@section('corpo')
<div class="flex flex-col w-full">
      <div class="bg-zinc-700 shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <h1 class='text-4xl p-5 mt-2 mx-10 font-semibold  bg-zinc-700/10 border-zinc-900 border-double rounded-xl text-zinc-400 text-center'>
          Lista de Produtos
        </h1>
        <ul class="mb-4">
          @foreach ($products as $produto)
          <br>
            <li class="shadow appearance-none border rounded w-full py-auto px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="lista" type="text">
            <p>Nome: {{$produto['name']}}</p>
          </li>
          <li class="shadow appearance-none border rounded w-full py-auto px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="lista" type="text">
          <p>Descrição: {{$produto['description']}}</p>
          </li>
          <li class="shadow appearance-none border rounded w-full py-auto px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="lista" type="text">
            <p>Código de Barras: {{$produto['bar_code']}}</p>
          </li>
          @endforeach
          <br>
        </ul>
      </div>
</div>
@stop
