<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id', 'transaction_id', 'payment_amount', 'payment_status',
    ];

    public function session() {
        return $this->belongsTo(Session::class);
    }
}