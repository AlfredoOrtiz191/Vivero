<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provedorModel extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'email',
        'telefono',
        'foto'];
}
