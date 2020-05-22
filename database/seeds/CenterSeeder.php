<?php

use Illuminate\Database\Seeder;
use App\Center;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $centerArray = [
            [
            'id' => 1,
            'county' => "Fayette",
            'name' => "New Day Recovery Center",
            'contact' => "Administration",
            'phone' => "(859) 277-4357",
            ],
            [
            'id' => 2,
            'county' => "Fayette",
            'name' => "Rebound Recovery Center",
            'contact' => "Administration",
            'phone' => "(859) 523-3477",
            ],
            [
            'id' => 3,
            'county' => "Fayette",
            'name' => "Hope Center Recovery for Men",
            'contact' => "Administration",
            'phone' => "(859) 225-4673",
            ],
            [
            'id' => 4,
            'county' => "Clark",
            'name' => "Kentucky Addiction Center, LLC",
            'contact' => "Administration",
            'phone' => "(888) 226-5824",
            ],
            [
            'id' => 5,
            'county' => "Scott",
            'name' => "Recovery Works Georgetown",
            'contact' => "Administration",
            'phone' => "(502) 570-9313",
            ],
            [
            'id' => 6,
            'county' => "Laurel",
            'name' => "Stepworks of London",
            'contact' => "Administration",
            'phone' => "(800) 545-9031",
            ],
            [
            'id' => 7,
            'county' => "Laurel",
            'name' => "Renew Recovery",
            'contact' => "Administration",
            'phone' => "(606) 802-7782",
            ],
            [
            'id' => 8,
            'county' => "Jefferson",
            'name' => "Corner of Hope Recovery Center",
            'contact' => "Administration",
            'phone' => "(502) 413-0102",
            ],
            [
            'id' => 9,
            'county' => "Lincoln",
            'name' => "Liberty Ranch",
            'contact' => "Administration",
            'phone' => "(888) 387-1531",
            ],
            [
            'id' => 10,
            'county' => "Madison",
            'name' => "Liberty Place Recovery Center",
            'contact' => "Kentucky River Foothills",
            'phone' => "(859) 625-0104",
            ]
            ];
            //Center::Create($centerArray[0]);
            foreach ($centerArray as &$CenterObj) {
                Center::create($CenterObj);
            }
    }
}

