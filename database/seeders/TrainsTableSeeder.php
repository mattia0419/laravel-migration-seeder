<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->title();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTime();
            $newTrain->orario_di_arrivo = $faker->dateTime();
            $newTrain->codice_treno = $faker->title();
            $newTrain->in_orario = $faker->numberBetween(0,1);
            $newTrain->cancellato = $faker->numberBetween(0,1);
            $newTrain->numero_carrozze = $faker->numberBetween(1,15);
            $newTrain->data = $faker->date();
            $newTrain->save();
        }
    }
}
