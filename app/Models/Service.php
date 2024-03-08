<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name', 'description', 'price',
    ];

    public function consultantServices() {
        return $this->hasMany(ConsultantService::class);
    }

    public function sessions() {
        return $this->hasMany(Session::class);
    }
}