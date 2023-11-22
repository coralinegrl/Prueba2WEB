<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
            purple: '#BF40BF',
          }
        }
      }
    }
  </script>
   <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
</head>
<figure>
  <div class="lg:content-auto text-4xl text-purple font-bold text-center">
    Lista de Productos
  </div>

  <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 bg-yellow-500">
    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
      <blockquote>
        <p class="text-lg font-medium text-white">
        Nombres: Andrea Michelle
        </p>
        <p class="text-lg font-medium text-white">
        Apellidos: Saldaña Cavour
        </p>
        <p class="text-lg font-medium text-white">
        RUT: 19.951.969-7
        </p>
        <p class="text-lg font-medium text-white">
        Asignatura: Introducción al Desarrollo Web/móvil
        </p>
        <p class="text-lg font-medium text-white">
        Fecha: 25/10/2023
        </p>
      </blockquote>
    </div>
  </figure>

  <h1 class="text-2xl font-bold text-purple text-center">
    Productos
  </h1>

  <ul>
    <li>
      <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 bg-gray-500">
        <div class="flex items-center">
          <img class="w-20 h-20 mr-4" src="https://jumbo.vtexassets.com/arquivos/ids/488610/Shampoo-Pantene-Colageno-300-ml.jpg?v=637916174793500000" alt="imagen">
          <div>
            <h2 class="text-lg font-bold">Shampoo</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl quis bibendum bibendum, nunc elit bibendum sapien, vel bibendum sapien sapien vel sapien.</p>
            <button class="bg-yellow-500 shadow hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Ver detalles
            </button>
          </div>
        </div>
      </figure>
    </li>

    <li>
      <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 bg-gray-500">
        <div class="flex items-center">
          <img class="w-20 h-20 mr-4" src="https://d1tjllbjmslitt.cloudfront.net/spree/products/68367/large_webp/580129-1.webp?1645539780" alt="imagen">
          <div>
            <h2 class="text-lg font-bold">Acondicionador</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl quis bibendum bibendum, nunc elit bibendum sapien, vel bibendum sapien sapien vel sapien.</p>
            <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Ver detalles
            </button>
          </div>
        </div>
      </figure>
    </li>
    <li>
      <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 bg-gray-500">
        <div class="flex items-center">
          <img class="w-20 h-20 mr-4" src="https://upload.wikimedia.org/wikipedia/commons/b/bf/Tualetsapo.jpg" alt="imagen">
          <div>
            <h2 class="text-lg font-bold">Jabón</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl quis bibendum bibendum, nunc elit bibendum sapien, vel bibendum sapien sapien vel sapien.</p>
            <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Ver detalles
            </button>
          </div>
        </div>
      </figure>
    </li>
    <li>
      <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 bg-gray-500">
        <div class="flex items-center">
          <img class="w-20 h-20 mr-4" src="https://d1tjllbjmslitt.cloudfront.net/spree/products/78429/large_webp/4130005-1.webp?1661385316" alt="imagen">
          <div>
            <h2 class="text-lg font-bold">Cepillo de Dientes</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl quis bibendum bibendum, nunc elit bibendum sapien, vel bibendum sapien sapien vel sapien.</p>
            <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Ver detalles
            </button>
          </div>
        </div>
      </figure>
    </li>
    <li>
      <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 bg-gray-500">
        <div class="flex items-center">
          <img class="w-20 h-20 mr-4" src="https://d1tjllbjmslitt.cloudfront.net/spree/products/96813/large_webp/4100568.webp?1691534414" alt="imagen">
          <div>
            <h2 class="text-lg font-bold">Toallitas Húmedas</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl quis bibendum bibendum, nunc elit bibendum sapien, vel bibendum sapien sapien vel sapien.</p>
            <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Ver detalles
            </button>
          </div>
        </div>
      </figure>
    </li>
    <li>
      <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 bg-gray-500">
        <div class="flex items-center">
          <img class="w-20 h-20 mr-4" src="https://dankmarket.cl/cdn/shop/products/Triple-140.jpg?v=1682111788" alt="imagen">
          <div>
            <h2 class="text-lg font-bold">Pasta de Dientes</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl quis bibendum bibendum, nunc elit bibendum sapien, vel bibendum sapien sapien vel sapien.</p>
            <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Ver detalles
            </button>
          </div>
        </div>
      </figure>
    </li>
    <li>
      <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 bg-gray-500">
        <div class="flex items-center">
          <img class="w-20 h-20 mr-4" src="https://mallorca.cl/wp-content/uploads/2021/07/Jgo-Toallas-Grecco-Turquesa-Fdo-Bco.jpg" alt="imagen">
          <div>
            <h2 class="text-lg font-bold">Toalla</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl quis bibendum bibendum, nunc elit bibendum sapien, vel bibendum sapien sapien vel sapien.</p>
            <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Ver detalles
            </button>
          </div>
        </div>
      </figure>
    </li>
      <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 bg-gray-500">
        <div class="flex items-center">
          <img class="w-20 h-20 mr-4" src="data:image/jpeg;base64,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" alt="imagen">
          <div>
            <h2 class="text-lg font-bold">Confort</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl quis bibendum bibendum, nunc elit bibendum sapien, vel bibendum sapien sapien vel sapien.</p>
            <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Ver detalles
            </button>
          </div>
        </div>
      </figure>
    </li>
    <li>
      <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 bg-gray-500">
        <div class="flex items-center">
          <img class="w-20 h-20 mr-4" src="https://belcorpchile.vtexassets.com/arquivos/ids/367275-800-800?v=638272902607670000&width=800&height=800&aspect=true" alt="imagen">
          <div>
            <h2 class="text-lg font-bold">Perfume</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl quis bibendum bibendum, nunc elit bibendum sapien, vel bibendum sapien sapien vel sapien.</p>
            <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Ver detalles
            </button>
          </div>
        </div>
      </figure>
    </li>
    <li>
      <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 bg-gray-500">
        <div class="flex items-center">
          <img class="w-20 h-20 mr-4" src="https://www.maicao.cl/on/demandware.static/-/Sites-masterCatalog_Chile/default/dwff7e2cdc/images/large/97186-simonds-cotonitos-200-unidades.jpg" alt="imagen">
          <div>
            <h2 class="text-lg font-bold">Cotonitos</h2>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl quis bibendum bibendum, nunc elit bibendum sapien, vel bibendum sapien sapien vel sapien.</p>
            <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Ver detalles
            </button>
          </div>
        </div>
      </figure>
    </li>
  </ul>







</body>
</html>
