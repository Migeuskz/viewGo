@extends('layouts.app')

@section('search')
    <div class=" flex justify-center gap-3">
        <input type="search" class=" rounded-full">
        <a href="#" class=""><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <circle cx="10" cy="10" r="7" />
            <line x1="21" y1="21" x2="15" y2="15" />
          </svg>
        </a>
    </div>
@endsection

@section('session')
    <a href="" class=" text-white">Cerrar session</a>
@endsection

@section('titulo')
    Bienvenido Admin
@endsection

@section('contenido')
    <main class=" flex flex-col">

        {{-- SELECTORS CONTAINERS --}}
        <div class=" flex justify-center items-center gap-10 p-7">
            <a href="/new" class=" bg-cyan-500 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="12" y1="5" x2="12" y2="19" />
                    <line x1="5" y1="12" x2="19" y2="12" />
                  </svg>
            </a>
            <a href="#" class=" bg-green-600 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-check" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="12" r="2" />
                    <path d="M12 19c-4 0 -7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7c-.42 .736 -.858 1.414 -1.311 2.033" />
                    <path d="M15 19l2 2l4 -4" />
                  </svg>
            </a>
            <a href="#" class=" bg-quinto rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-off" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="3" y1="3" x2="21" y2="21" />
                    <path d="M10.584 10.587a2 2 0 0 0 2.828 2.83" />
                    <path d="M9.363 5.365a9.466 9.466 0 0 1 2.637 -.365c4 0 7.333 2.333 10 7c-.778 1.361 -1.612 2.524 -2.503 3.488m-2.14 1.861c-1.631 1.1 -3.415 1.651 -5.357 1.651c-4 0 -7.333 -2.333 -10 -7c1.369 -2.395 2.913 -4.175 4.632 -5.341" />
                  </svg>
            </a>
        </div>
        {{-- CARDS CONTAINER  --}}
        <div class=" flex justify-center p-4">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden"> 
                <div class="md:flex">
                  <div class="md:flex-shrink-0">
                    <img class="h-49 w-full object-cover md:w-49" src="https://via.placeholder.com/150" alt="Imagen de la tarjeta">
                  </div>
                  <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Título de la tarjeta</div>
                    <p class="mt-2 text-gray-500">Descripción de la tarjeta.</p>
                    

                    <div class=" flex  items-center w-1 gap-2">

                      <a href="" class=" bg-cyan-500 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                        </svg>
                      </a>

                      <a href="" class=" bg-green-600 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <circle cx="12" cy="12" r="2" />
                          <path d="M12 19c-4 0 -7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7c-.42 .736 -.858 1.414 -1.311 2.033" />
                          <path d="M15 19l2 2l4 -4" />
                        </svg>
                      </a>

                      <a href="" class=" bg-quinto rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <line x1="4" y1="7" x2="20" y2="7" />
                          <line x1="10" y1="11" x2="10" y2="17" />
                          <line x1="14" y1="11" x2="14" y2="17" />
                          <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                          <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                      </a>

                    </div>
                  </div>
                </div>
              </div>
              
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden">
                <div class="md:flex">
                  <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:w-48" src="https://via.placeholder.com/150" alt="Imagen de la tarjeta">
                  </div>
                  <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Título de la tarjeta</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Enlace de la tarjeta</a>
                    <p class="mt-2 text-gray-500">Descripción de la tarjeta.</p>
                  </div>
                </div>
              </div>

            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden">
                <div class="md:flex">
                  <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:w-48" src="https://via.placeholder.com/150" alt="Imagen de la tarjeta">
                  </div>
                  <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Título de la tarjeta</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Enlace de la tarjeta</a>
                    <p class="mt-2 text-gray-500">Descripción de la tarjeta.</p>
                  </div>
                </div>
              </div>

        </div>
        
    </main>
@endsection