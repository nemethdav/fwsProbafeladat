<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireExtinguisherType extends Model
{
    use HasFactory;

    public function fireExtinguishers(){
        return $this->hasMany(FireExtinguisher::class);
    }
}
