<?php

namespace App\Helpers;

class ProfessionHelper
{
    public static function getCoverImage($profession){
        $profession = strtolower($profession);

        switch($profession){
            case 'illustrator' :
                return asset('images/11235346_10586.jpg');
            case 'designer' :
                return asset('images/timothy-exodus-P-t_ABQlPxY-unsplash.jpg');
            case 'content_creator' :
                return asset('images/40476117_8809084.jpg');
            case 'photographer' :
                return asset('images/24644548_Huge camera and tiny people taking pictures.jpg');
            case 'videographer' :
                return asset('images/27037021_cameraman_set_1.jpg');
            case 'lainnya' :
                return asset('images/sebastian-svenson-d2w-_1LJioQ-unsplash.jpg');
            default:
                return asset('images/sebastian-svenson-d2w-_1LJioQ-unsplash.jpg');
        }
    }
}