<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    use HasFactory;
    public $table = "maquina";

    protected $fillable = [
        "nom",
        "descripcio",
        "model",
        "num_serie",
        "planta",
        "ubicacio",
        "estat"
    ];

    public function errors()
    {
        return $this->hasMany(Error::class,'maquina');
    }

}
