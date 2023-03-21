<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'ingredient', 'number_of_person', 'time'];
    protected $casts = ['ingredient' => 'array',];
}
