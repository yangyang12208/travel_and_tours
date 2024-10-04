<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoreUserDetails extends Model
{
    protected $table = 'tbl_user_details'; // Specify the table name

    protected $fillable = [
        'user_id', 'firstname', 'lastname', 'address', 'religion', 'email', 'phone_number', 'user_images'
    ];

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}