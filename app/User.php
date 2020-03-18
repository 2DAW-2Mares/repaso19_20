<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
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
     * Devuelve la Especialidad de un usuario.
     */
    public function especialidad()
    {
        return $this->belongsTo('App\Especialidad');
    }

    /**
     * Devuelve las preferencias de un usuario.
     */
    public function preferencias()
    {
        return $this->hasMany('App\Preferencia');
    }

    /**
     * Los modulos elegidos por el usuario.
     */
    public function modulos()
    {
        return $this->belongsToMany('App\Modulo')->using('App\Preferencia');
    }
}
