<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'date'=>'13th march',
            'time'=>'12:00',
            'quantity' => 5,
            'type'=>'cow',
            'price' => '500',
            'user_id' => 2
        ]);
         
        $this->call([
            PaymentSeeder::class
        ]);
    }
}
