<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin_login extends Model
{
    protected $table = "admin_logins";
    protected $primaryKey = "id";
    protected $fillable = ['email','password'];

}
