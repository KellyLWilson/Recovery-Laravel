<?php

use Illuminate\Database\Seeder;
use App\County;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countyArray = [
            [
            'id' => 1,
            'name' => "Adair"
            ],
            [
            'id' => 2,
            'name' => "Allen"
            ],
            [
            'id' => 3,
            'name' => "Anderson"
            ],
            [
            'id' => 4,
            'name' => "Ballard"
            ],
            [
            'id' => 5,
            'name' => "Ballard"
            ],
            [
            'id' => 6,
            'name' => "Barren"
            ],
            [
            'id' => 7,
            'name' => "Bath"
            ],
            [
            'id' => 8,
            'name' => "Bell"
            ],
            [
            'id' => 9,
            'name' => "Boone"
            ],
            [
            'id' => 10,
            'name' => "Bourbon"
            ]
            ];
            //County::Create($countyArray[0]);
            foreach ($countyArray as &$CountyObj) {
                County::create($CountyObj);
            }
    }
}
