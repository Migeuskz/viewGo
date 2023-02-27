@extends('layouts.app')

@section('titulo')
    Login
@endsection

@section('contenido')
    <div class=" md:flex md:justify-center md:gap-5 md:items-center">
        <div class=" md:w-5/12 p-5">
            <img src="{{asset('img/viewGo.png')}}" alt="imagen registro en ViewGo">
        </div>

        <div class=" md:w-4/12 bg-white p-6 rounded-lg shadow-xl md:items-center">
            <form action="">


                <div class=" mb-5">
                    <label for="username" class=" mb-2 block uppercase text-center text-gray-500 font-bold">
                        Bienvenido Admin
                    </label>

                    <label for="username" class=" mb-2 block uppercase {{--text-start--}} text-gray-500 font-bold">
                        Username
                    </label>
                    <input 
                    id="username"
                    name="username"
                    type="text"
                    placeholder="Ingresa tu Usuario"
                    class=" border p-3 w-full rounded-full"
                    />
                </div>


                <div class=" mb-5">
                    <label for="password" class=" mb-2 block uppercase {{--text-start--}} text-gray-500 font-bold">
                        Password
                    </label>
                    <input 
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Ingresa tu Password"
                    class=" border p-3 w-full rounded-full"
                    />
                </div>


                <input 
                type="submit"
                value="Iniciar Sesión"
                class=" bg-quinto hover:bg-terceario transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-full"
                />
                
            </form>
        </div>
    </div>
@endsection