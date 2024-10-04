<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_core_tours extends Model
{
    use HasFactory;


    public function dailyItineraries()
    {
        return $this->hasMany(tbl_core_itineraries::class, 'tour_id'); // Use the correct model name
    }

}
