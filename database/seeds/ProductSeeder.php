<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');
        for ($i=0; $i<50; $i++) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'slug' => $faker->word,
                'description' => $faker->text,
                'price' => $faker->randomFloat(2, 12, 150000)
            ]);
        }
    }
}
