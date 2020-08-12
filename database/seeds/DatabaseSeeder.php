<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         $this->call(createNewWaterBill::class);
         $this->call(createNewElectricityBill::class);
         $this->call(createNewTelecomeBill::class);

    }
}
