<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class user_frelancer extends Authenticatable
{
    use HasFactory;

    protected $table = 'user_frelancers';
    protected $primaryKey = 'frelance_id';
    protected $fillable = ['nama_lengkap','username','password','email','no_telepon','profesi','status'];

    public function portofolios(){
        return $this->hasMany(portofolio::class, 'frelance_id', 'frelance_id');
    }

    public function bookings(){
        return $this->hasMany(Booking::class, 'frelane_id', 'frelance_id');
    }
}
