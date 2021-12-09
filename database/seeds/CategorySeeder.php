<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

            [
                'name'   => 'Leadership',
                'status' => '1',
            ],
            [
                'name'   => 'Community',
                'status' => '1',

            ],
            [
                'name'   => 'Communication',
                'status' => '1',

            ],
            [
                'name'   => 'Women in the World',
                'status' => '1',

            ],
            [
                'name'   => 'Life Balance',
                'status' => '1',

            ],
          
        ]);
    }
}
