<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id', 'consultant_id', 'service_id', 'start_time', 'end_time', 'status', 'payment_status', 'total_amount',
    ];

    public function client() {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function consultant() {
        return $this->belongsTo(User::class, 'consultant_id');
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }
}