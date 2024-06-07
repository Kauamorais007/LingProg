<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_produto',
            'valor',
            'categoria_id',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
