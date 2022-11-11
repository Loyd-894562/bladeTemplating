<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
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
                'unit_type'=>'kilogram(s)',
                'description'=>'This Is Kilogram Description'
            ]
        ];

        foreach($data as $units) {
            \App\Unit::create($units);
        }
    }
}
