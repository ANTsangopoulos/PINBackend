<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    public $fillable =['nombre', 'email', 'edad', 'contraseña', 'contraseña_confirmation'];
}
