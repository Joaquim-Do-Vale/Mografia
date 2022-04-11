<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitacoes extends Model
{
    use HasFactory;

    protected $fillable = ['free_id ', 'nome_s', 'descricao'];
}
