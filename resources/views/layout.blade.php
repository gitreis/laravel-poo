<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>
      <title>Inventario</title>
  </head>
<body>
  <div class="h-screen flex flex-col">
    <div class="flex flex-1 bg-zinc-900">
      <aside class="w-72 bg-zinc-950 p-6">
        <nav class='space-y-5 mt-6'>
          <a href="/" class="flex items-center gap-3 text-sm font-semibold text-zinc-400 hover:text-zinc-100">
            <HomeIcon/>
            Home
          </a>
          <a href="/users" class="flex items-center gap-3 text-sm font-semibold text-zinc-400 hover:text-zinc-100">
            <Users/>
            Usuários
          </a>
          <a href="/products" class="flex items-center gap-3 text-sm font-semibold text-zinc-400 hover:text-zinc-100">
            <Box/>
            Produtos
          </a>
          <a href="/categories" class="flex items-center gap-3 text-sm font-semibold text-zinc-400 hover:text-zinc-100">
            <Tags/>
            Categorias
          </a>
          <a href="/subcategories" class="flex items-center gap-3 text-sm font-semibold text-zinc-400 hover:text-zinc-100">
            <Tag/>
            Sub-Categorias
          </a>
          <a href="/inventories" class="flex items-center gap-3 text-sm font-semibold text-zinc-400 hover:text-zinc-100">
            <List/>
            Inventários
          </a>
        </nav>
        <nav class="mt-10 pt-10 border-t border-zinc-800 flex flex-col gap-3">
          <a href="/credits" class="flex items-center gap-3 text-sm font-semibold text-zinc-400 hover:text-zinc-100">
            <TerminalSquare/>
            Créditos
          </a>
        </nav>
      </aside>
      <div class="flex-1">
        <div class='flex flex-col gap-4'>
          @yield('title')
        <div class="flex flex-col p-10 mb-20 mx-20 bg-zinc-700/10 border-zinc-900 border-double rounded-xl">
          @yield('corpo')
        </div>
        </div>
      </div>
    </div>
    <footer class="bg-zinc-800 border-zinc-700 p-6 font-semibold text-4xl text-zinc-400">Todos direitos reservados</footer>
  </div>
</body>
</html>
