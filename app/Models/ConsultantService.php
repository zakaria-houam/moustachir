<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantService extends Model
{
    use HasFactory;

    protected $fillable = [
        'consultant_id', 'service_id',
    ];

    public function consultant() {
        return $this->belongsTo(User::class, 'consultant_id');
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }

}