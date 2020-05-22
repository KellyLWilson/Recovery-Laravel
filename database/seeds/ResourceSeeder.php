<?php

use Illuminate\Database\Seeder;
use App\Resource;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resourceArray = [
            [
            'id' => 1,
            'county' => "",
            'name' => "Casey's Law",
            'contact' => "Joan Arlinghaus",
            'phone' => "833.8KY.HELP",
            'web_url' => "https://caseyslaw.org/",
            ],
            [
            'id' => 2,
            'county' => "",
            'name' => "People Advocating Recovery",
            'contact' => "PAR",
            'phone' => "502.552.8573",
            'web_url' => "peopleadvocatingrecovery.org",
            ],
            [
            'id' => 3,
            'county' => "",
            'name' => "United for Recovery",
            'contact' => "",
            'phone' => "(502)348-1879",
            'web_url' => "http://www.unitedforrecovery.org/",
            ]
            ];
            //Resource::Create($resourceArray[0]);
            foreach ($resourceArray as &$ResourceObj) {
                Resource::create($ResourceObj);
            }
    }
}

