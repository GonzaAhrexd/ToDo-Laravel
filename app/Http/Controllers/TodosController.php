<?php
namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    public function destroy($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todos.index')->with('success', 'Task successfully deleted');
    }

    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:5'
        ]);

        // Crear una nueva tarea
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('todos.index')->with('success', 'Task successfully created');
    }

    public function edit(Request $request)
    {
        $todo = Todo::find($request->id);
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();


        return view('todos.edit', ['todo' => $todo]);
    }
}