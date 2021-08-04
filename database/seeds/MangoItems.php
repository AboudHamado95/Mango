<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MangoItems extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 50) as $index) {
            DB::table('mangoes')->insert(
                [
                    'name' => 'mango' . Str::random('4'),
                    'body' => $faker->paragraph(6)
                ]
            );
        }
    }
}
