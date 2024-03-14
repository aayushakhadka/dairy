<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::create([
           'name'=>'admin',
           'phone'=>'1234567887',
            'amount'=>300,
            'remarks'=>'cow milk',
            'type'=>'cow milk',
             'order_id'=>'1'
        ]); 
    }
}
