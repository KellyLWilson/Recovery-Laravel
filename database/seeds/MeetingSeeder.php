<?php

use Illuminate\Database\Seeder;
use App\Meeting;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meetingArray = [
            [
            'id' => 1,
            'mlocation' => "That Adair Place",
            'day' => "Saturday",
            'time' => "2:00 P.M.",
            'type' => "Co-ed",
            'county_id' => "1"
            ],
            [
            'id' => 2,
            'mlocation' => "That Adair Place",
            'day' => "Saturday",
            'time' => "2:00 P.M.",
            'type' => "Co-ed",
            'county_id' => "1"
            ],
            [
            'id' => 3,
            'mlocation' => "That Second Adair Place",
            'day' => "Sunday",
            'time' => "5:00 P.M.",
            'type' => "Male",
            'county_id' => "1"
            ],
            [
            'id' => 4,
            'mlocation' => "That Adair Place",
            'day' => "Saturday",
            'time' => "12:00 P.M.",
            'type' => "Female",
            'county_id' => "1"
            ],
            [
            'id' => 5,
            'mlocation' => "That Anderson Place",
            'day' => "Saturday",
            'time' => "12:00 P.M.",
            'type' => "Female",
            'county_id' => "3"
            ],
            [
            'id' => 6,
            'mlocation' => "That Other Anderson Place",
            'day' => "Monday",
            'time' => "12:00 P.M.",
            'type' => "Male",
            'county_id' => "3"
            ],
            [
            'id' => 7,
            'mlocation' => "That Bell Place",
            'day' => "Saturday",
            'time' => "2:00 P.M.",
            'type' => "Co-ed",
            'county_id' => "8"
            ],
            [
            'id' => 8,
            'mlocation' => "That Other Bell Place",
            'day' => "Monday",
            'time' => "12:00 P.M.",
            'type' => "Male",
            'county_id' => "8"
            ],
            [
            'id' => 9,
            'mlocation' => "That Barren Place",
            'day' => "Monday",
            'time' => "12:00 P.M.",
            'type' => "Male",
            'county_id' => "6"
            ],
            [
            'id' => 10,
            'mlocation' => "That Other Barren Place",
            'day' => "Monday",
            'time' => "8:00 A.M.",
            'type' => "Female",
            'county_id' => "6"
            ]
            ];
            //Meeting::Create($meetingArray[0]);
            foreach ($meetingArray as &$MeetingObj) {
                Meeting::create($MeetingObj);
            }
    }
}
