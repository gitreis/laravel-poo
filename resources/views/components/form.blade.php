<form class="bg-indigo-900 p-3 flex flex-col w-1/2 mx-auto my-auto align-middle self-center mt-20 rounded" method="post" action="/cep">
  @csrf
    <div class="p-8 flex flex-col w-1/2 mx-auto mt-1">
      <h1 class="text-2xl text-white mx-auto">Buscar CEP</h1>
      <p class="mt-1 text-white mx-auto">Encontre centenas de CEP. </br>Nunca mais erre o endereco!</p>
    </div>
    <div class="p-8 flex flex-col w-1/2 mx-auto mt-1">
      <label for="cep" class="text-white rounded text-lg">CEP:</label>
      <input id="cep" name="cep" type="text" class="mt-3 rounded h-10 text-lg" required>
      <button type="submit" class="bg-slate-400 hover:bg-slate-200 rounded mt-3 w-max px-2 text-lg">Buscar</button>
    </div>
    <div class="p-8 flex flex-col w-1/2 mx-auto">
      <label for="uf" class="text-white rounded text-lg">Unidade Federativa - UF:</label>
      <input id="uf" name="uf" type="text" class="rounded mt-3 h-10 text-lg" readonly>
    </div>
    <div class="p-8 flex flex-col w-1/2 mx-auto">
      <label for="cidade" class="text-white rounded text-lg">Cidade:</label>
      <input id="cidade" name="cidade" type="text" class="rounded mt-3 h-10 text-lg" readonly>
    </div>
    <div class="p-8 flex flex-col w-1/2 mx-auto">
      <label for="bairro" class="text-white rounded text-lg">Bairro:</label>
      <input id="bairro" name="bairro" type="text" class="rounded mt-3 h-10 text-lg" readonly>
    </div>
    <div class="p-8 flex flex-col w-1/2 mx-auto">
      <label for="rua" class="text-white rounded text-lg">rua:</label>
      <input id="rua" name="rua" type="text" class="rounded mt-3 h-10 text-lg" readonly>
    </div>
  </form>
