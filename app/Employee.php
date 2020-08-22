<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name','surname','category_id', 'factor','balance','salary','payment_type','joined', 'phone','email','address',
        'lga_id','state_id','avatar', 'next_of_king_name','next_of_king_relationship','next_of_king_phone','next_of_king_address'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
