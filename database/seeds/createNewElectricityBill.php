<?php

use App\newElectricityBill;
use Illuminate\Database\Seeder;

class createNewElectricityBill extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        newElectricityBill::create([
            'hour_number' => '123456',
            'course_number' => '1',
            'name' => 'eyad',
            'relase_date' => '2020-2-2',
            'next_relase_date' => '2020-4-2',
            'power' => 'متوسط',
            'previous_visa' => '100',
            'current_visa' => '200',
            'amount_of_consumption' => '100',
            'amount_due_of_payment' => '10000',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newElectricityBill::create([
            'hour_number' => '123456',
            'course_number' => '2',
            'name' => 'eyad',
            'relase_date' => '2020-4-2',
            'next_relase_date' => '2020-6-2',
            'power' => 'متوسط',
            'previous_visa' => '200',
            'current_visa' => '400',
            'amount_of_consumption' => '200',
            'amount_due_of_payment' => '20000',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newElectricityBill::create([
            'hour_number' => '123456',
            'course_number' => '3',
            'name' => 'eyad',
            'relase_date' => '2020-6-2',
            'next_relase_date' => '2020-8-2',
            'power' => 'متوسط',
            'previous_visa' => '400',
            'current_visa' => '900',
            'amount_of_consumption' => '500',
            'amount_due_of_payment' => '50000',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newElectricityBill::create([
            'hour_number' => '654321',
            'course_number' => '1',
            'name' => 'ghiath',
            'relase_date' => '2020-2-2',
            'next_relase_date' => '2020-4-2',
            'power' => 'متوسط',
            'previous_visa' => '100',
            'current_visa' => '200',
            'amount_of_consumption' => '100',
            'amount_due_of_payment' => '10000',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newElectricityBill::create([
            'hour_number' => '654321',
            'course_number' => '2',
            'name' => 'ghiath',
            'relase_date' => '2020-4-2',
            'next_relase_date' => '2020-6-2',
            'power' => 'متوسط',
            'previous_visa' => '200',
            'current_visa' => '400',
            'amount_of_consumption' => '200',
            'amount_due_of_payment' => '20000',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newElectricityBill::create([
            'hour_number' => '654321',
            'course_number' => '3',
            'name' => 'ghiath',
            'relase_date' => '2020-6-2',
            'next_relase_date' => '2020-8-2',
            'power' => 'متوسط',
            'previous_visa' => '400',
            'current_visa' => '900',
            'amount_of_consumption' => '500',
            'amount_due_of_payment' => '50000',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
    }
}
