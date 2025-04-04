<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmyCorps extends Model
{
    use HasFactory;

    protected $table = 'army_corps'; 

    protected $fillable = [
        'denomination_ac' 
    ];

    public function soldier()
    {
        return $this->hasMany('app/Models/Soldier'); 
    }
}
