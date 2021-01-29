<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oex_student extends Model
{
    protected $tabel="oex_students"; 
    protected $primaryKey="id";
    protected $fillable=["name","email","mobile_no","dob","exam","dept","password","status"];
}
