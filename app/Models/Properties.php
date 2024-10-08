<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $fillable = [
        'address',
        'slug',
        'type',
        'price',
        'size',
        'bedrooms',
        'bathrooms',
        'description',
        'image',
        'status',
//        'status'
    ];




}
