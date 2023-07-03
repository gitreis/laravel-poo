@extends('layout')

@section('title')
  <h1 class='text-4xl p-5 mt-10 mx-20 font-semibold  bg-zinc-700/10 border-zinc-900 border-double rounded-xl text-zinc-400 text-center'>
    Produtos
  </h1>
@stop

@section('corpo')
<div class="flex flex-col w-full">
      <div class="bg-zinc-700 shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <h1 class='text-4xl p-5 mt-2 mx-10 font-semibold  bg-zinc-700/10 border-zinc-900 border-double rounded-xl text-zinc-400 text-center'>
          Lista de Produtos
        </h1>

        <ul class="mb-4">
          @foreach ($products as $produto)
          <br>
            <li class="flex flex-row space-x-10 items-center shadow appearance-none border rounded w-full py-auto px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="lista" type="text">
            <p class="flex justify-items-start">Nome: {{$produto['name']}}</p><button class="flex justify-items-end bg-red-800 text-white p-1" value="{{$produto['id']}}" action="/products" method="delete">Deletar</button>
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

<div class="flex flex-col w-full">
      <form class="bg-zinc-700 shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="/products">
        @csrf
        <h1 class='text-4xl p-5 mt-2 mx-10 font-semibold  bg-zinc-700/10 border-zinc-900 border-double rounded-xl text-zinc-400 text-center'>
          Cadastro de Produtos
        </h1>
        <div class="mb-4">
          <label class="block text-white text-sm font-bold mb-2" htmlFor="name">
            Nome:
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-800 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Tomate" required/>
        </div>

        <div class="mb-4">
          <label class="block text-white text-sm font-bold mb-2" htmlFor="description">
            Descrição:
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-800 leading-tight focus:outline-none focus:shadow-outline h-24 " id="description" type="text" placeholder="Suco de tomate." required/>
        </div>

        <div class="mb-4">
          <label class="block text-white text-sm font-bold mb-2" htmlFor="bar_code">
            Código de barras:
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-800 leading-tight focus:outline-none focus:shadow-outline" id="bar_code" type="text" placeholder="13412341" required/>
        </div>

        <div class="mb-4">
          <label class="block text-white text-sm font-bold mb-2" htmlFor="brand">
            Marca:
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-800 leading-tight focus:outline-none focus:shadow-outline" id="brand" type="text" placeholder="Pomarola" required/>
        </div>

        <div class="mb-4">
          <label class="block text-white text-sm font-bold mb-2" htmlFor="category">
            Categoria:
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-800 leading-tight focus:outline-none focus:shadow-outline" id="category" type="text" placeholder="Fruta" required/>
        </div>

        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Enviar
          </button>
        </div>
      </form>
    </div>
@stop
