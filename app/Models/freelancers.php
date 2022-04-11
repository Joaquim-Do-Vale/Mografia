<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freelancers extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'especialidade'];
}
