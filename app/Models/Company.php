<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name'];
    // contiene array di attributi che non vogliamo siano modificabili,
    // array vuoto se vogliamo consetnire la modifica di tutti gli attributi
    // protected $guarded = ["id", "created_at", "updated_at"];
}
