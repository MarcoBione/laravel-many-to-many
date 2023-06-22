<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technology = config('projects.technology');

        foreach($technology as $language){
            $newTechnology = new Technology();
            $newTechnology->name = $language['name'];
            $newTechnology->save();
        }

    }
}
