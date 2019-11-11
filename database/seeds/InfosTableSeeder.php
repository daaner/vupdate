<?php

use Illuminate\Database\Seeder;
use App\Models\Info as Seedmodel;
use Faker\Factory as Faker;

class InfosTableSeeder extends Seeder
{
  public function run() {
    $faker = Faker::create('ru_RU');

    for ($i=0; $i < 200; $i++) {
      $newData = Seedmodel::create(array(
        'title'   => $faker->name,
        'text'    => $faker->sentence($nbWords = 8, $variableNbWords = true),
        'created_at'    => $faker->dateTimeBetween($startDate = '-2 months', $endDate = 'now', $timezone = null),
      ));
    }

  }
}
