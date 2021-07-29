<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireExtinguisher extends Model
{
    use HasFactory;

    protected $fillable = ['establishmentsID', 'insideID', 'place', 'typeID', 'serialNumber', 'productionDate', 'comment'];

    public function establishment() {
        return $this->belongsTo(Establishment::class);
    }

    public function fireExtinguisherType() {
        return $this->belongsTo(FireExtinguisherType::class, 'typeID', 'id');
    }

    public function maintenance(){
        return $this->belongsTo(Maintenance::class);
    }
}
