<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'booking_id';
    protected $fillable = 
    [
    'name_customer',
    'phone_customer',
    'judul_booking',
    'detail',
    'harga',
    'dateline',
    'referensi_file',
    'referensi_link'
    ];

    protected $casts = [
        'dateline' => 'date'
    ];

    public function freelancerUser(){
        return $this->belongsTo(user_frelancer::class, 'frelane_id', 'frelance_id');
    }
}
