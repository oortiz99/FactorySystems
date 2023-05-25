<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Treballador extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nom',
        'cognoms',
        'username',
        'contrasenya',
        'rol',
        'data_incorporacio',
    ];

    public $table = "treballador";

    function validarUser($username,$pass){
        $array = [
            'username' => $username,
            // 'contrasenya' => $pass
        ];
        $users = DB::table("treballador")
                ->where($array)
                ->get();
        
        if(count($users) == 0)
            return false;

        if(!Hash::check($pass,$users[0]->contrasenya))
            return false;
        
        return true;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
