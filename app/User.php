<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Personalização de envio de email de confirmação
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new \App\Notifications\Auth\SendConfirmationEmail($this));
    }

    public function getAvatarAttribute ($value) {
        return $value ? asset('storage' . $value) : asset('assets/img/not-auth-user.png');
    }


    // ==============================
    // Relações
    // =============================

    public function videos()
    {
        return $this->hasMany('App\Video');
    }

    public function channels()
    {
        return $this->hasMany('App\Cannel');
    }

    public function courses()
    {
        return $this->hasMany('App\Course');
    }

    public function categories()
    {
        return $this->hasMany('App\Category');
    }

}
