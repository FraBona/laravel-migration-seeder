<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class NewTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'id' => '1',
                'agency' => 'treniItalia',
                'departure_station' => 'Palermo',
                'arrival_station' => 'Catania',
                'departure_time' => '2023-12-14 18:00:00',
                'arrival_time' => '2023-12-14 20:00:00',
                'code_train' => 123456,
                'number_carriages' => 30,
                'in_time' => 'yes',
                'deleted' => 'no'
            ]
            ];

        foreach($trains as $train){
            $new_train = new Train();
            $new_train->id = $train['id'];
            $new_train->agency = $train['agency'];
            $new_train->departure_station = $train['departure_station'];
            $new_train->arrival_station = $train['arrival_station'];
            $new_train->departure_time = $train['departure_time'];
            $new_train->arrival_time = $train['arrival_time'];
            $new_train->code_train = $train['code_train'];
            $new_train->number_carriages = $train['number_carriages'];
            $new_train->in_time = $train['in_time'];
            $new_train->deleted = $train['deleted'];

            $new_train->save();
        }

    }
}
