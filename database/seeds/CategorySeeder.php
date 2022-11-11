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
        $data = [
            [
                'category'=>'Test',
                'description'=>'Test Description'
            ],
            [
                'category'=>'Test',
                'description'=>'Test Description'
            ],
            [
                'category'=>'Test',
                'description'=>'Test Description'
            ],
        ];

        foreach($data as $categories) {
            \App\Category::create($categories);
        }
    }
}
