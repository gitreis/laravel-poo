@section('formProduto')
  <div className="w-full">
      <form className="bg-zinc-700 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div className="mb-4">
          <label className="block text-white text-sm font-bold mb-2" htmlFor="name">
            Nome:
          </label>
          <input className="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Tomate"/>
        </div>

        <div className="mb-4">
          <label className="block text-white text-sm font-bold mb-2" htmlFor="name">
            Descrição:
          </label>
          <input className="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-800 leading-tight focus:outline-none focus:shadow-outline h-24 " id="name" type="text" placeholder="Tomate"/>
        </div>

        <div className="mb-4">
          <label className="block text-white text-sm font-bold mb-2" htmlFor="name">
            Código de barras:
          </label>
          <input className="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Tomate"/>
        </div>

        <div className="mb-4">
          <label className="block text-white text-sm font-bold mb-2" htmlFor="name">
            Categoria:
          </label>
          <input className="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Tomate"/>
        </div>

        <div className="flex items-center justify-between">
          <button className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Enviar
          </button>
        </div>
      </form>
    </div>
@stop
