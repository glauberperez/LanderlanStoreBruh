<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "tbCliente";

    protected $fillable = [
        "idCliente",
        "nome",
        "dtNasc",
        "estadoCivil",
        "endereco",
        "numero",
        "complemento",
        "cep",
        "cidade",
        "estado",
        "rg",
        "cpf",
        "email",
        "fone",
        "celular"
    ];
    
}
