<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cadastros extends Model
{
    protected $fillable = ['nome','email','telefone','senha'];
}
