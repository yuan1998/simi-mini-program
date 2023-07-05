<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'title' => '热门商品',
                'header_banner' => NULL,
                'remark' => NULL,
                'order' => 1,
                'created_at' => '2023-06-30 15:10:38',
                'updated_at' => '2023-07-03 11:42:39',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'title' => '分类2',
                'header_banner' => NULL,
                'remark' => NULL,
                'order' => 3,
                'created_at' => '2023-06-30 15:11:04',
                'updated_at' => '2023-06-30 15:11:22',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 0,
                'title' => '推荐商品',
                'header_banner' => NULL,
                'remark' => NULL,
                'order' => 2,
                'created_at' => '2023-06-30 15:11:18',
                'updated_at' => '2023-07-03 11:42:47',
            ),
        ));
        
        
    }
}