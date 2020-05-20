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
            ]
            ];
            //County::Create($countyArray[0]);
            foreach ($countyArray as &$CountyObj) {
                County::create($CountyObj);
            }
    }
}
