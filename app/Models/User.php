<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /*********************************************************************************************************************************************************************
     *
     * Function: User.setPasswordAttribute().
     * Purpose: Hashes the password entered for the new User before it is stored to the database.
     * Precondition: A password has been originally supplied.
     * Postcondition: The newly hashed password is saved to the user within the database.
     *
     * @param  string  $cleanPassword The unhashed password value.
     * @return void
     *
     ********************************************************************************************************************************************************************/
    protected function setPasswordAttribute(string $cleanPassword)
    {
        $this->attributes['password'] = Hash::make($cleanPassword);
    }
}
