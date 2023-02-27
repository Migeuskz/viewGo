@extends('layouts.app')

@section('titulo')
    Registrate en ViewGo
@endsection

@section('contenido')
    <div class=" md:flex md:justify-center md:gap-5 md:items-center">
        <div class=" md:w-5/12 p-5">
            <img src="{{asset('img/viewGo.png')}}" alt="imagen registro en ViewGo">
        </div>

        <div class=" md:w-4/12 bg-white p-6 rounded-lg shadow-xl md:items-center">
            <form action="{{ route('register')}}" method="POST" novalidate>

                @csrf

                <div class=" mb-5">
                    <label for="name" class=" mb-2 block uppercase {{--text-start--}} text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input 
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Tu nombre"
                    class=" border p-3 w-full rounded-full @error('name')
                         border-quinto
                    @enderror"
                    value="{{old('name')}}"
                    />

                    @error('name')
                        <p class=" bg-quinto text-white my-2 rounded-full text-base p-2 text-center">
                            {{ $message}}
                        </p>
                    @enderror
                </div>

                <div class=" mb-5">
                    <label for="username" class=" mb-2 block uppercase {{--text-start--}} text-gray-500 font-bold">
                        Username
                    </label>
                    <input 
                    id="username"
                    name="username"
                    type="text"
                    placeholder="Tu nombre de usuario"
                    class=" border p-3 w-full rounded-full"
                    />

                    @error('username')
                        <p class=" bg-quinto text-white my-2 rounded-full text-base p-2 text-center">
                            {{ $message}}
                        </p>
                    @enderror
                </div>

                <div class=" mb-5">
                    <label for="name" class=" mb-2 block uppercase {{--text-start--}} text-gray-500 font-bold">
                        Email
                    </label>
                    <input 
                    id="email"
                    name="email"
                    type="email"
                    placeholder="Tu email de Registro"
                    class=" border p-3 w-full rounded-full"
                    />

                    @error('email')
                        <p class=" bg-quinto text-white my-2 rounded-full text-base p-2 text-center">
                            {{ $message}}
                        </p>
                    @enderror
                </div>

                <div class=" mb-5">
                    <label for="password" class=" mb-2 block uppercase {{--text-start--}} text-gray-500 font-bold">
                        Password
                    </label>
                    <input 
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Password de Registro"
                    class=" border p-3 w-full rounded-full"
                    />

                    @error('password')
                        <p class=" bg-quinto text-white my-2 rounded-full text-base p-2 text-center">
                            {{ $message}}
                        </p>
                    @enderror
                </div>

                <div class=" mb-5">
                    <label for="password_confirmation" class=" mb-2 block uppercase {{--text-start--}} text-gray-500 font-bold">
                       Repetir Password
                    </label>
                    <input 
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    placeholder="Repite tu Password"
                    class=" border p-3 w-full rounded-full"
                    />

                    @error('name')
                        <p class=" bg-quinto text-white my-2 rounded-full text-base p-2 text-center">
                            {{ $message}}
                        </p>
                    @enderror
                </div>

                <input 
                type="submit"
                value="Crear Cuenta"
                class=" bg-quinto hover:bg-terceario transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-full"
                />
                
            </form>
        </div>
    </div>
@endsection
