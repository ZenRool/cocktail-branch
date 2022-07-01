<?php

use App\Cocktail;
use Illuminate\Database\Seeder;

class CocktailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $cocktail = new Cocktail();
            $cocktail->name = 'Jagerbomb ' . $i;
            $cocktail->glass_type = 'rock alto';
            $cocktail->ingredients = 'jagermeister e redbull';
            $cocktail->type_of_preparation = 'build';
            $cocktail->price = 5 + $i;
            $cocktail->save();
        }
    }
}
