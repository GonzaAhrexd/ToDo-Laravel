@extends('app')

@section('content')
        {{-- Hazme un buen formulario usando tailwind --}}
    <main class="p-4">
    {{-- Estiliza un input con  tailwind --}}
    <div class="flex flex-col items-center justify-center">
        <div class="bg-gray-300 w-1/3 rounded-lg p-4">
            <form action="{{route('todos.store')}}" method="POST">
            @csrf

            @if (session('success'))
            <div class="w-full flex flex-col items-center justify-center">
                <h6 class="bg-green-400 text-white font-bold rounded-lg h-6 w-2/6 flex flex-col items-center justify-center">{{session('success')}}</h6>
            </div>
            @endif

            @error('title')
            <div class="w-full flex flex-col items-center justify-center">
                <h6 class="bg-red-400 text-white font-bold rounded-lg h-6 w-2/6 flex flex-col items-center justify-center">{{ $message }}</h6>
            </div>
            @enderror


                <div class="flex flex-col w-full">
                <span for="title"  class="ml-2 font-bold">Title</span>
                <input  name="title" type="text" class="border open-sans border-gray-300 rounded-md h-10 xl:h-8 2xl:h-10 my-2 xl:my-1 xl:m-2 m-4 pl-2" />
                <textarea name="description" class="border open-sans border-gray-300 rounded-md h-52  my-2 xl:my-1 xl:m-2 m-4 pl-2 resize-none" placeholder="Description"></textarea>
            </div>
            <div class="flex flex-col w-full items-center justify-center my-5">
                <button class="bg-green-500 rounded-lg text-white font-bold h-10 w-60 hover:bg-green-700">Add new task</button>
            </div>
            </form>
        </div>
        
    </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6">
        @foreach ($todos as $todo)
            <div
                class="bg-gray-300 rounded-lg p-4 m-4 flex flex-col items-center justify-center">
                <h2 class="font-bold">{{$todo->title}}</h2>
                <p>{{$todo->description}}</p>
                <form action="{{route('todos.destroy', [$todo->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 rounded-lg text-white font-bold h-10 w-60 hover:bg-red-700">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
        </main>
            @endsection