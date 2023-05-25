<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recanvis extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nom',
        'descripcio',
        'quantitat'
    ];

    public $table = "recanvis";


}
