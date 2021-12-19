<?php

namespace App\Models;

class Custom
{
    public static $app_name = "Laravel Framework";

    public static function showAlert($icon,$title){
        return[
            'icon' => $icon,
            'title' => $title
        ];
    }
}
