<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model für ToDos (Aufgaben)
class Todo extends Model
{
    // Erlaubte Felder für Massenbearbeitung
    protected $fillable = ['text', 'is_done'];
}
