<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    // Controller für ToDos (Aufgabenliste)

    // Zeigt alle ToDos (Übersicht)
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    // Speichert ein neues ToDo in der Datenbank
    public function store(Request $request)
    {
        $validated = $request->validate([
            'text' => 'required|string|max:255',
        ]);
        Todo::create($validated);
        return redirect()->route('todos.index')->with('success', 'To-Do erstellt!');
    }

    // Schaltet den Status eines ToDos zwischen erledigt und offen um
    public function update(Request $request, Todo $todo)
    {
        $todo->is_done = !$todo->is_done;
        $todo->save();
        return redirect()->route('todos.index')->with('success', 'Status geändert!');
    }

    // Löscht ein ToDo aus der Datenbank
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index')->with('success', 'To-Do gelöscht!');
    }
}
