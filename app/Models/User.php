<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'firstname', 'lastname', 'email', 'password',
    ];

            //GET EACH USER DETAILS
             public function details()
            {
                return $this->hasOne(CoreUserDetails::class, 'user_id', 'uuid');
            }

    // INSERT INTO tbl_user_details
    public function coreUserDetails()
    {       //user_id
        return $this->hasOne(CoreUserDetails::class, 'uuid');   //CONNECTED INTO  CoreUserDetails MODEL
    }
        /**
     * Automatically generate UUID for 'uuid' when creating a new user.
     */
    protected static function boot()
    {
        parent::boot();

        // Hook into the 'creating' event to generate a UUID for the 'uuid' column
        static::creating(function ($user) {
            if (empty($user->uuid)) {
                $user->uuid = (string) Str::uuid();  // Generate and assign UUID
            }
        });
    }
  

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
}
