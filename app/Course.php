<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{

    use SoftDeletes;

    protected $with = ['videos', 'course_comments'];

    protected $fillable = ['title', 'image', 'description', 'objectives', 'price', 'total_videos', 'duration', 'channel_id', 'user_id', 'category_id'];

    public function videos()
    {
        return $this->hasMany('App\Video');
    }

    public function course_comments()
    {
        return $this->hasMany('App\CourseComment');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }

}
