<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memory;

class MemoryController extends Controller
{
    // Controller für Memories (Tagebuch-Einträge)

    // Zeigt alle Memories (Übersicht)
    public function index()
    {
        $memories = Memory::all();
        return view('memories.index', compact('memories'));
    }

    // Zeigt das Formular zum Erstellen einer neuen Memory
    public function create()
    {
        return view('memories.create');
    }

    // Speichert eine neue Memory in der Datenbank
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required',
            'color' => 'nullable|string|max:50',
            'image_url' => 'nullable|string|max:255',
        ]);
        Memory::create($validated);
        return redirect()->route('memories.index')->with('success', 'Memory erstellt!');
    }

    // Zeigt eine einzelne Memory (Detailansicht)
    public function show(Memory $memory)
    {
        return view('memories.show', compact('memory'));
    }

    // Zeigt das Formular zum Bearbeiten einer Memory
    public function edit(Memory $memory)
    {
        return view('memories.edit', compact('memory'));
    }

    // Aktualisiert eine bestehende Memory in der Datenbank
    public function update(Request $request, Memory $memory)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required',
            'color' => 'nullable|string|max:50',
            'image_url' => 'nullable|string|max:255',
        ]);
        $memory->update($validated);
        return redirect()->route('memories.index')->with('success', 'Memory aktualisiert!');
    }

    // Löscht eine Memory aus der Datenbank
    public function destroy(Memory $memory)
    {
        $memory->delete();
        return redirect()->route('memories.index')->with('success', 'Memory gelöscht!');
    }
}
