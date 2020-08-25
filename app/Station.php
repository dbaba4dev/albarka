<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $fillable = ['fuel','name','address','price'];

    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }
}
