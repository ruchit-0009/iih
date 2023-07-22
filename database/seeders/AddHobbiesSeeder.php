<?php

namespace Database\Seeders;

use App\Models\HobbiesModel;
use Illuminate\Database\Seeder;

class AddHobbiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' =>'Learning'],
            ['name' =>'Dance'],
            ['name' =>'Painting'],
            ['name' =>'Photography'],
            ['name' =>'Writing'],
            ['name' =>'Cooking'],
            ['name' =>'Gardening'],
            ['name' =>'Reading'],
            ['name' =>'Journaling'],
            ['name' =>'Yoga'],
        ];
        HobbiesModel::insert($data);
    }
}
