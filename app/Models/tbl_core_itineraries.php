<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_core_itineraries extends Model
{
    use HasFactory;

    public function tour()
    {
        return $this->belongsTo(tbl_core_tours::class, 'tour_id'); // Use the correct model name
    }
}
