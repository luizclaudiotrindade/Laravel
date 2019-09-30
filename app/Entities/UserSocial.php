<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Iluminate\Notifications\Notifiable;
use Illuminate\Database\Eloquente\SoftDeletes;

class UserSocial extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user.id','social_network','social_id','social_email','social_avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

