<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newElectricityBill extends Model
{
    protected $primaryKey = "hour_number";
    protected $fillable = ['hour_number', 'course_number', 'name', 'relase_date', 'next_relase_date','power','previous_visa','current_visa', 'amount_of_consumption', 'amount_due_of_payment', 'city', 'area', 'street',];
    public $timestamps = false;
   
  
}
