<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['fuel_id', 'user_id', 'station_id', 'sales_assist', 'employee_id',  'store', 'plate_no', 'qty', 'unit_price',  'tot_price',  'status', 'serial'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        /**
         * We calculate the column $total automatically every time
         * we call the $model->save();
         */
        self::updating(function($model){
            $model->tot_price = $model->qty * $model->unit_price;
        });

    }
}
