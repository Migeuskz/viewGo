@extends('layouts.app')

@section('titulo')
    Creando Productos
@endsection

@push("styles")
{{-- <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"> --}}
    
</script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />    
@endpush

@section('contenido')
    <div class=" md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form id="dropzone" action="{{ route('imagenes.store') }}" method="POST" enctype="multipart/form-data" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>

        <div class="md:w-1/2 p-10 bg-white rounded-xl shadow-xl mt-10 md:mt-0">
            <form>
                @csrf

                <div class=" mb-5">
                    <label for="name" class=" mb-2 block uppercase {{-- text-start --}} text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input id="name" name="name" type="text" placeholder="Tu nombre de producto"
                        class=" border p-3 w-full rounded-full @error('name')
                         border-quinto
                    @enderror"
                        value="{{ old('name') }}" />

                    @error('name')
                        <p class=" bg-quinto text-white my-2 rounded-full text-base p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror

                    <label for="name" class=" mb-2 block uppercase {{-- text-start --}} text-gray-500 font-bold">
                        Descripción
                    </label>
                    <input id="name" name="name" type="text" placeholder="Tu Descrpción"
                        class=" border p-3 w-full rounded-full @error('name')
                         border-quinto
                    @enderror"
                        value="{{ old('name') }}" />

                    @error('name')
                        <p class=" bg-quinto text-white my-2 rounded-full text-base p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror

                    <label for="name" class=" mb-2 block uppercase {{-- text-start --}} text-gray-500 font-bold">
                        Precio
                    </label>
                    <input id="name" name="name" type="text" placeholder="0.00"
                        class=" border p-3 w-full rounded-full @error('name')
                         border-quinto
                    @enderror"
                        value="{{ old('name') }}" />

                    @error('name')
                        <p class=" bg-quinto text-white my-2 rounded-full text-base p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror

                    <input type="submit" value="Crear Producto"
                        class=" bg-quinto hover:bg-terceario transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-full mt-10" />
                </div>
            </form>
        </div>

    </div>
@endsection
