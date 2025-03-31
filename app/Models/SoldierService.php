<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoldierService extends Model
{

    protected $table = 'soldier_service';
    protected $primaryKey = 'id';

    public function soldier()
    {
        return $this->belongsTo('app/Models/Soldier');
    }

    public function service()
    {
        return $this->belongsTo('app/Models/Service');
    }
}


