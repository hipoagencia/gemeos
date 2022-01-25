<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarImages extends Model
{
    use HasFactory;

    protected $table = "car_images";

    protected $fillable = [
        'car',
        'url',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
