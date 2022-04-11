<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projecto extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'tem_id', 'projecto_d', 'tipo', 'acesso', 'orcamento', 'data_inicio', 'data_fim'];
}
