<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nome', 'endereco', 'email', 'telefone'];

    protected $table = 'Funcionario';
}

/*
Mudar chave primaria
protected $primaryKey = 'nome_pk';

Não querer que seja Auto Increment
public $increment = false

Definir o tipo da variavel
protected $keyType = 'string'

Tirar os campos timestamps
public $timestamps = false
*/
