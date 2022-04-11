<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temas extends Model
{
    use HasFactory;

    protected $fillable = ['tema_d', 'user_id'];

}
