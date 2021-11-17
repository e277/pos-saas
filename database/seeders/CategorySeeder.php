<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $categories = [
            [
                'category_type_id' => 1,
                'category_nm' => 'Electronics',
                'category_desc' => 'category 1 description',
            ],
            [
                'category_type_id' => 2,
                'category_nm' => 'Toys and Games',
                'category_desc' => 'category 2 description',
            ],
            [
                'category_type_id' => 3,
                'category_nm' => 'Books',
                'category_desc' => 'category 3 description',
            ],
            [
                'category_type_id' => 4,
                'category_nm' => 'Automotive',
                'category_desc' => 'category 4 description',
            ],
            [
                'category_type_id' => 5,
                'category_nm' => 'Pet Supplies',
                'category_desc' => 'category 5 description',
            ],
            [
                'category_type_id' => 6,
                'category_nm' => 'Luggage',
                'category_desc' => 'category 6 description',
            ],
            [
                'category_type_id' => 7,
                'category_nm' => 'Sports and Outdoors',
                'category_desc' => 'category 7 description',
            ],
            [
                'category_type_id' => 8,
                'category_nm' => 'Arts and Craft',
                'category_desc' => 'category 8 description',
            ],
            [
                'category_type_id' => 9,
                'category_nm' => 'Women Fashion',
                'category_desc' => 'category 9 description',
            ],
            [
                'category_type_id' => 10,
                'category_nm' => 'Men Fashion',
                'category_desc' => 'category 10 description',
            ],
        ];

        foreach ($categories as $key => $value) {
            # code...
            Category::create($value);
        }
    }
}
