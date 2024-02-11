<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();

        return Inertia::render(
            'Todos/index',
            [
                'todos' => $todos
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render(
            'Todos/create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',            
            //'completed' => 'string'
        ]);
        Todo::create([
            'name' => $request->name,            
            'completed' => 0
        ]);
        sleep(1);

        return redirect()->route('todos.index')->with('message', 'Item Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return Inertia::render(
            'Todos/edit',
            [
                'todo' => $todo
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'name' => 'required|string|max:255',            
            'completed' => 'string'
        ]);

        $todo->name = $request->name;
        $todo->completed = $request->completed;
        $todo->save();
        sleep(1);

        return redirect()->route('todos.index')->with('message', 'Item Updated Successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function check_update(Request $request, Todo $todo)
    {
        $request->validate([            
            'completed' => 'int'
        ]);
                
        $todo = Todo::find($request->id);
        $todo->completed = $request->completed;
        $todo->save();
        sleep(1);

        return redirect()->route('todos.index')->with('message', 'Item Checked Successfully');
    }    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        sleep(1);

        return redirect()->route('todos.index')->with('message', 'Item Delete Successfully');
    }
}
