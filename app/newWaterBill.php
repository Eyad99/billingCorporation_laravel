<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newWaterBill extends Model
{
    protected $primaryKey = "counter_number";
    protected $fillable = ['counter_number', 'course_number', 'name', 'relase_date', 'next_relase_date', 'amount_of_consumption', 'amount_due_of_payment', 'city', 'area', 'street',];
    public $timestamps = false;
}
