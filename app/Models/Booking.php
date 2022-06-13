<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;
class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
        'current','destination','leaving','returning','noofadult',
        'noofchildren', 'adultcost', 'childrencost','typeofclass',
        'typeoftrip','cost'
    ];
}
