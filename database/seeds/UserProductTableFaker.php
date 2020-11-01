<?php

use App\computer;
use App\computerUser;
use App\UserProduct;
use Illuminate\Database\Seeder;


class UserProductTableFaker extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 50; $i++) {
            $user = new UserProduct;

            $users1 = App\User::pluck('id')->toArray();
            $users2 = App\Product::pluck('id')->toArray();

            $user->user_id = $faker->randomElement($users1);
            $user->product_id = $faker->randomElement($users2);

            $user->save();
        }
    }
}
