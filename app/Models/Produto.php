<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "tbProduto";
    protected $fillable = [
        "idProduto",
        "idCategoria",
        "produto",
        "valor"
    ];
}
