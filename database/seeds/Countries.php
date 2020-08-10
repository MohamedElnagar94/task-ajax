<?php

use Illuminate\Database\Seeder;
use App\Country;
class Countries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonString  = file_get_contents('https://restcountries.eu/rest/v2/all');
        $data  = json_decode($jsonString, true);
        foreach ($data as $country){
            Country::create([
                'name' => $country["name"],
                'capital' => $country["capital"],
                'region' => $country["region"],
                'population' => $country["population"],
            ]);
        }
    }
}
