<?php

namespace Database\Seeders;

use App\Models\FarmerDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class FarmerDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FarmerDetail::create([
            'quantity' => 5,
            'type'=>'cow',
            'price' => '500',
            'user_id' => 1
        ]);
    }
}
