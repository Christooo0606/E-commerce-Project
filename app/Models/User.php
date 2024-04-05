<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lname', // Agregar campos adicionales aquí
        'Fname', // Corregir el nombre del campo
        'email',
        'phoneno',
        'address1',
        'address2', // Agregar el campo 'address2'
        'city', // Agregar el campo 'city'
        'state', // Agregar el campo 'state'
        'country', // Agregar el campo 'country'
        'pincode', // Agregar el campo 'pincode'
        'password',
        'avatar', // Agregar el campo 'avatar'
        'google_id',
        'role_as', // Corregir el nombre del campo
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
