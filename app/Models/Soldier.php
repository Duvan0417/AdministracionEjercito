<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    protected $table = 'SOLDIERS';
    protected $primaryKey = 'ID_Soldier';

    public function soldierService()
    {
        return $this->hasMany('app/Models/SoldierService');
    }

    public function barrack()
    {
        return $this->belongsTo('app/Models/Barrack');
    }

    public function company()
    {
        return $this->belongsTo('app/Models/Company');
    }

    public function armycorp()
    {
        return $this->belongsTo('app/Models/ArmyCorp');
    }
}

