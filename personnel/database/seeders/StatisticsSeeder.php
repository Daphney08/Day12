<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB, Carbon;
class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 11,
                'personnel_id' => 1,
                'height' => 150,
                'weight' => 130,
                'bmi' => 113,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
        
            [
                'id' => 12,
                'personnel_id' => 2,
                'height' => 150,
                'weight' => 130,
                'bmi' => 114,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'id' => 13,
                'personnel_id' => 3,
                'height' => 152,
                'weight' => 132,
                'bmi' => 110,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'id' => 14,
                'personnel_id' => 4,
                'height' => 154,
                'weight' => 134,
                'bmi' => 119,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'id' => 15,
                'personnel_id' => 5,
                'height' => 150,
                'weight' => 130,
                'bmi' => 116,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
        
            [
                'id' => 16,
                'personnel_id' => 6,
                'height' => 158,
                'weight' => 140,
                'bmi' => 123,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'id' => 17,
                'personnel_id' => 7,
                'height' => 152,
                'weight' => 130,
                'bmi' => 110,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'id' => 18,
                'personnel_id' => 8,
                'height' => 152,
                'weight' => 141,
                'bmi' => 113,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'id' => 19,
                'personnel_id' => 9,
                'height' => 150,
                'weight' => 141,
                'bmi' => 112,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'id' => 20,
                'personnel_id' => 9,
                'height' => 151,
                'weight' => 147,
                'bmi' => 123,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'id' => 21,
                'personnel_id' => 10,
                'height' => 156,
                'weight' => 140,
                'bmi' => 115,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
        ];
        
        DB::table('statistics')->insert($data);
    }
}
