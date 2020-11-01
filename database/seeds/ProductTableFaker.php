<?php

use App\Product;
use Illuminate\Database\Seeder;


class ProductTableFaker extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 200; $i++) {
            $user = new Product;
            $user->name = $faker->name;

            $users = App\Category::pluck('id')->toArray();

            $user->	category_id = $faker->randomElement($users);

            $user->save();
        }
    }
}


