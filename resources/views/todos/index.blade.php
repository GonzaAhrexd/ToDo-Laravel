@extends('app')

@section('content')
        {{-- Hazme un buen formulario usando tailwind --}}
    <main class="p-4">
    {{-- Estiliza un input con  tailwind --}}
    <div class="flex flex-col items-center justify-center">
        <div class="bg-gray-300 w-1/3">
            <div class="flex flex-col w-full">
                <span class="ml-2 font-bold">Título</span>
                <input for="title" type="text" class="border open-sans border-gray-300 rounded-md h-10 xl:h-8 2xl:h-10 my-2 xl:my-1 xl:m-2 m-4 pl-2" />
            </div>
            <div class="flex flex-col w-full items-center justify-center my-5">
                <button class="bg-green-500 rounded-lg text-white font-bold h-10 w-60 hover:bg-green-700">Crear nueva tarea</button>
            </div>
        </div>
    </div>
        </main>
            @endsection