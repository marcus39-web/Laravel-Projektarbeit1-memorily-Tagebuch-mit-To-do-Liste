<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model für Memories (Tagebuch-Einträge)
class Memory extends Model
{
    // Erlaubte Felder für Massenbearbeitung
    protected $fillable = ['title', 'text', 'color', 'image_url'];
}
