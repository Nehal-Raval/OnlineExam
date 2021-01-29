<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oex_category extends Model
{
    protected $tabel="oex_categories"; 
    protected $primaryKey="id";
    protected $fillable=["name","status"];
}
