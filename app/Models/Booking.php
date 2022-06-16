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
        'typeoftrip','cost','userid','id','scheduleid'
    ];

    public function booking()
    {
        return $this->belongsTo('userid', App\Models\User);
    }

    public function schedule()
    {
        return $this->belongsTo('scheduleid', App\Models\Schedule);
    }
}
