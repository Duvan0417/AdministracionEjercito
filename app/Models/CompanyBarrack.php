<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyHeadquarter extends Model
{
    protected $table = 'company_headquarters';
    protected $primaryKey = 'id';

    public function barrack()
    {
        return $this->belongsTo('app/Models/Barrack');
    }

    public function company()
    {
        return $this->hasMany('app/Models/Company');
    }
}


