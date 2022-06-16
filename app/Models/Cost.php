<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;
class Cost extends Model
{
    use HasFactory;
    protected $table = 'cost';
    protected $fillable = [
        'scheduleid','bookingid'
    ];

    public function schedule()
    {
        return $this->belongsTo('scheduleid', Schedule::class);
    }
    public function booking()
    {
        return $this->belongsTo('bookingid', Booking::class);
    }
}
