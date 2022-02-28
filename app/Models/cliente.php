<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'name',
        'apellido',
        'email',
        'telefono',
        'direccion',
        'password',
        'foto'];
}
