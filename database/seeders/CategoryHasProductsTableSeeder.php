<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryHasProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_has_products')->delete();
        
        \DB::table('category_has_products')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'product_id' => 1,
            ),
            1 => 
            array (
                'category_id' => 3,
                'product_id' => 1,
            ),
            2 => 
            array (
                'category_id' => 3,
                'product_id' => 2,
            ),
        ));
        
        
    }
}