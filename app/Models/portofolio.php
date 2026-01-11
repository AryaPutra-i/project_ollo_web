<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class portofolio extends Model
{
    use Sluggable;
    protected $table = 'portofolios';
    // protected $primary = 'id';

    protected $fillable = ['judul_portofolio','slug','detail_portofolio','image'];

    public function freelancer(){
        return $this->belongTo(user_frelancer::class, 'frelance_id', 'frelance_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
