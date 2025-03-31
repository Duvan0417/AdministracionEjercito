<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function armyCorps()
    {
        return $this->belongsTo('app/Models/ArmyCorps');
    }

    public function soldierService()
    {
        return $this->hasMany('app/Models/SoldierService');
    }
}

