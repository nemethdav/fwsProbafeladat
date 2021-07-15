<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    public function fireExtinguishers() {
        return $this->hasMany(FireExtinguisher::class);
    }

    public function maintenanceTypes(){
        return $this->belongsTo(MaintenanceType::class);
    }
}
