@extends('layout.app')


@section('titulo')
    Registrate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" class="rounded-lg" alt="imagen de registro">
        </div>
        <div class="md:w-3/12 mx-4 p-3 md:mx-0 bg-white shadow-md rounded-lg">
            <form action="/crear-cuenta" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="text-sm mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Nombre"
                        class="border p-2 w-full rounded-md"
                    />
                </div>
                <div class="mb-5">
                    <label for="username" class="text-sm mb-2 block uppercase text-gray-500 font-bold">username</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Username"
                        class="border p-2 w-full rounded-md"
                    />
                </div>
                <div class="mb-5">
                    <label for="username" class="text-sm mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input
                        type="email"
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Email"
                        class="border p-2 w-full rounded-md"
                    />
                </div>
                <div class="mb-5">
                    <label for="password" class="text-sm mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Contraseña"
                        class="border p-2 w-full rounded-md"
                    />
                </div>
                <button type="submit" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
                    Crear Cuenta
                </button>
            </form>
        </div>
    </div>
@endsection
