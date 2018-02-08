<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    
    protected $fillable = ['titulo','descricao','quantidade','valor'];
    protected $guarded = ['id', 'created_at', 'update_at'];
}
