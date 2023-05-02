<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treballador extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'cognoms',
        'rol',
        'rol',
        'data_incorporacio',
    ];

    public $table = "treballador";
}
