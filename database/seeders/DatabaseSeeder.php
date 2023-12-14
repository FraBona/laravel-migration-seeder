<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $trains = [];

        foreach($trains as $train){
            $newTrain = new Train();
            $newTrain->agency=$train['treniItalia'];
            $newTrain->departure_station=$train['Palermo'];
            $newTrain->arrival_station=$train['Catania'];
            $newTrain->departure_time=$train['18:00:00'];
            $newTrain->arrival_time=$train['20:00:00'];
            $newTrain->codeTrain=$train['1234567'];
            $newTrain->number_carriages=$train['45'];
            $newTrain->save();
        }
    }
}
