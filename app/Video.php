<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function getDurationAttribute($value)
    {
        $hours = null;
        $minutes = null;
        $seconds = null;

        list($hours, $minutes, $seconds) = explode(':', $value);

        return $hours !== '00' ? $value : $minutes . ':' . $seconds;
    }
}
