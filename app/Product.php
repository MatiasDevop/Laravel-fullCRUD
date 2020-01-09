<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=["NameArticul", "Section", "Price", "Datetime", "Country_birth","ruta"];
}
