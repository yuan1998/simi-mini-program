<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProgramPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('program_pages')->delete();
        
        \DB::table('program_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'path' => '/pages/index/index',
                'name' => '首页',
                'type' => 0,
                'order' => 1,
                'created_at' => '2023-07-12 09:58:41',
                'updated_at' => '2023-07-12 09:58:41',
            ),
            1 => 
            array (
                'id' => 2,
                'path' => '/pages/reservation/index',
                'name' => '预约',
                'type' => 0,
                'order' => 2,
                'created_at' => '2023-07-12 09:58:41',
                'updated_at' => '2023-07-12 09:58:41',
            ),
            2 => 
            array (
                'id' => 3,
                'path' => '/pages/shop/index',
                'name' => '商城',
                'type' => 0,
                'order' => 3,
                'created_at' => '2023-07-12 09:58:41',
                'updated_at' => '2023-07-12 09:58:41',
            ),
            3 => 
            array (
                'id' => 4,
                'path' => '/pages/reservation/create',
                'name' => '申请预约',
                'type' => 0,
                'order' => 4,
                'created_at' => '2023-07-12 09:58:41',
                'updated_at' => '2023-07-12 09:58:41',
            ),
            4 => 
            array (
                'id' => 5,
                'path' => '/pages/shop/search?k={搜索关键词}',
                'name' => '搜索结果',
                'type' => 0,
                'order' => 5,
                'created_at' => '2023-07-12 09:58:41',
                'updated_at' => '2023-07-12 09:58:41',
            ),
            5 => 
            array (
                'id' => 6,
                'path' => '/pages/project/index?id={测试项目ID}',
                'name' => '项目自测',
                'type' => 0,
                'order' => 6,
                'created_at' => '2023-07-12 09:58:41',
                'updated_at' => '2023-07-12 09:58:41',
            ),
            6 => 
            array (
                'id' => 7,
                'path' => '/pages/shop/detail?id={商品ID}',
                'name' => '商品详情页',
                'type' => 0,
                'order' => 7,
                'created_at' => '2023-07-12 09:58:41',
                'updated_at' => '2023-07-12 09:58:41',
            ),
            7 => 
            array (
                'id' => 8,
                'path' => '/pages/article/index?id={文章ID}',
                'name' => '文章详情页',
                'type' => 0,
                'order' => 8,
                'created_at' => '2023-07-12 09:58:41',
                'updated_at' => '2023-07-12 09:58:41',
            ),
            8 => 
            array (
                'id' => 9,
                'path' => '/pages/index/view?url={外部H5链接}',
                'name' => 'webView页面',
                'type' => 0,
                'order' => 9,
                'created_at' => '2023-07-12 10:17:47',
                'updated_at' => '2023-07-12 10:17:47',
            ),
        ));
        
        
    }
}