<?php

use App\newTelecomeBill;
use Illuminate\Database\Seeder;

class createNewTelecomeBill extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        newTelecomeBill::create([
            'phone_number' => '2752752',
            'course_number' => '1',
            'name' => 'eyad',
            'relase_date' => '2020-2-2',
            'next_relase_date' => '2020-4-2',
            'local_calls' => '1000',
            'international_calls' => '2000',
            'servise_adsl' => '2500',
            'amount_due_of_payment' => '5500',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newTelecomeBill::create([
            'phone_number' => '2752752',
            'course_number' => '2',
            'name' => 'eyad',
            'relase_date' => '2020-4-2',
            'next_relase_date' => '2020-6-2',
            'local_calls' => '2000',
            'international_calls' => '2000',
            'servise_adsl' => '2500',
            'amount_due_of_payment' => '7500',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newTelecomeBill::create([
            'phone_number' => '2752752',
            'course_number' => '3',
            'name' => 'eyad',
            'relase_date' => '2020-6-2',
            'next_relase_date' => '2020-8-2',
            'local_calls' => '5000',
            'international_calls' => '2000',
            'servise_adsl' => '2500',
            'amount_due_of_payment' => '9500',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newTelecomeBill::create([
            'phone_number' => '2322323',
            'course_number' => '1',
            'name' => 'laila',
            'relase_date' => '2020-2-2',
            'next_relase_date' => '2020-4-2',
            'local_calls' => '1000',
            'international_calls' => '2000',
            'servise_adsl' => '2500',
            'amount_due_of_payment' => '5500',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newTelecomeBill::create([
            'phone_number' => '2322323',
            'course_number' => '2',
            'name' => 'eyad',
            'relase_date' => '2020-4-2',
            'next_relase_date' => '2020-6-2',
            'local_calls' => '5000',
            'international_calls' => '2000',
            'servise_adsl' => '2500',
            'amount_due_of_payment' => '9500',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
        newTelecomeBill::create([
            'phone_number' => '2322323',
            'course_number' => '3',
            'name' => 'eyad',
            'relase_date' => '2020-6-2',
            'next_relase_date' => '2020-8-2',
            'local_calls' => '10000',
            'international_calls' => '2000',
            'servise_adsl' => '2500',
            'amount_due_of_payment' => '15500',
            'city' => 'damascus',
            'area' => 'rukn alden',
            'street' => 'asad alden',
        ]);
    }
}
