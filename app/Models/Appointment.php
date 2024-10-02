<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'date',
        'time_slot',
        'client_name',
        'client_email',
        'client_phone',
    ];

    // Update the relationship with the Properties model
    public function property()
    {
        return $this->belongsTo(Properties::class, 'property_id'); // Ensure the model name matches
    }
}
