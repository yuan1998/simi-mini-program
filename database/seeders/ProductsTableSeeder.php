<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'test',
                'sku' => 'test1',
                'view' => 0,
                'order' => 2,
                'sell' => 0,
                'store' => 0,
                'price' => 0,
                'enable' => 1,
                'content' => '<p>1</p>',
                'cover' => 'images/WX20230607-192734@2x.png',
                'images' => '["images/31b6f90a7078d45d84bbba447bb8892e.png", "images/24a9ec38d420fc1a187a5dcf9586c168.png"]',
                'created_at' => '2023-06-30 15:20:39',
                'updated_at' => '2023-07-03 11:51:14',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '测试',
                'sku' => 'test2',
                'view' => 0,
                'order' => 1,
                'sell' => 0,
                'store' => 0,
                'price' => 0,
                'enable' => 1,
                'content' => '<p>2</p>',
                'cover' => 'images/d5c84baaa05faff4de1e8fe7d7d092b5.png',
                'images' => '["images/52885d9eac1314e70eda991964ca2328.png"]',
                'created_at' => '2023-07-03 11:43:55',
                'updated_at' => '2023-07-03 11:51:14',
            ),
        ));
        
        
    }
}