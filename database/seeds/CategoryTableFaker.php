<?php

use App\Category;
use Illuminate\Database\Seeder;


class CategoryTableFaker extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $user = new Category;
            $user->name = $faker->name;
            $user->save();
        }
    }
}
