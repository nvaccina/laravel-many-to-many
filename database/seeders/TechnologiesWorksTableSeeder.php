<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use App\Models\Work;

class TechnologiesWorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++){

            $work = Work::inRandomOrder()->first();

            $technology_id = Technology::inRandomOrder()->first()->id;

            $work->technologies()->attach($technology_id);
        }
    }
}
