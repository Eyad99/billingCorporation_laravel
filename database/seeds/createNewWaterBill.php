<?php

use App\newWaterBill;
use Illuminate\Database\Seeder;

class createNewWaterBill extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        newWaterBill::create([
            'counter_number' => '7894561',
            'course_number' => '1',
            'name' => 'eyad',
            'relase_date' => '2020-2-2',
            'next_relase_date' => '2020-4-2',
            'amount_of_consumption' => '100',
            'amount_due_of_payment' => '1000',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newWaterBill::create([
            'counter_number' => '7894561',
            'course_number' => '2',
            'name' => 'eyad',
            'relase_date' => '2020-4-2',
            'next_relase_date' => '2020-6-2',
            'amount_of_consumption' => '500',
            'amount_due_of_payment' => '5000',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newWaterBill::create([
            'counter_number' => '7894561',
            'course_number' => '3',
            'name' => 'eyad',
            'relase_date' => '2020-6-2',
            'next_relase_date' => '2020-8-2',
            'amount_of_consumption' => '900',
            'amount_due_of_payment' => '9000',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newWaterBill::create([
            'counter_number' => '7894562',
            'course_number' => '1',
            'name' => 'fadi',
            'relase_date' => '2020-2-2',
            'next_relase_date' => '2020-4-2',
            'amount_of_consumption' => '800',
            'amount_due_of_payment' => '8000',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newWaterBill::create([
            'counter_number' => '7894562',
            'course_number' => '2',
            'name' => 'fadi',
            'relase_date' => '2020-4-2',
            'next_relase_date' => '2020-6-2',
            'amount_of_consumption' => '900',
            'amount_due_of_payment' => '9000',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newWaterBill::create([
            'counter_number' => '7894562',
            'course_number' => '3',
            'name' => 'fadi',
            'relase_date' => '2020-6-2',
            'next_relase_date' => '2020-8-2',
            'amount_of_consumption' => '1000',
            'amount_due_of_payment' => '10000',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
     
    }
}
