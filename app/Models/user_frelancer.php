<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_frelancer extends Model
{
    protected $table = 'user_frelancers';
    protected $primary = 'frelance_id';
    protected $fillable = ['nama_lengkap','username','password','email','no_telepon','profesi'];
}
