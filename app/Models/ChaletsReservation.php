<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChaletsReservation extends Model
{
    use HasFactory;
    protected $table = 'chalets_reservations';
    protected $fillable = [
        'guest_id', 'chalet_id', 'from', 'to', 'status', 'is_paid',
    ];

    public function guest()
    {
        return $this->belongsTo(Guests::class, 'guest_id', 'id');
    }

    public function chalet()
    {
        return $this->belongsTo(Chalets::class, 'chalet_id', 'id');
    }
}
