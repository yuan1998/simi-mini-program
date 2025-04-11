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
                'created_at' => '2023-07-12 09:58:41',
                'id' => 1,
                'name' => '首页',
                'order' => 1,
                'path' => '/pages/index/index',
                'type' => 0,
                'updated_at' => '2023-07-12 09:58:41',
            ),
            1 => 
            array (
                'created_at' => '2023-07-12 09:58:41',
                'id' => 2,
                'name' => '预约',
                'order' => 2,
                'path' => '/pages/reservation/index',
                'type' => 0,
                'updated_at' => '2023-07-12 09:58:41',
            ),
            2 => 
            array (
                'created_at' => '2023-07-12 09:58:41',
                'id' => 3,
                'name' => '商城',
                'order' => 3,
                'path' => '/pages/shop/index',
                'type' => 0,
                'updated_at' => '2023-07-12 09:58:41',
            ),
            3 => 
            array (
                'created_at' => '2023-07-12 09:58:41',
                'id' => 4,
                'name' => '申请预约',
                'order' => 4,
                'path' => '/pages/reservation/create',
                'type' => 0,
                'updated_at' => '2023-07-12 09:58:41',
            ),
            4 => 
            array (
                'created_at' => '2023-07-12 09:58:41',
                'id' => 5,
                'name' => '搜索结果',
                'order' => 5,
                'path' => '/pages/shop/search?k={搜索关键词}',
                'type' => 0,
                'updated_at' => '2023-07-12 09:58:41',
            ),
            5 => 
            array (
                'created_at' => '2023-07-12 09:58:41',
                'id' => 6,
                'name' => '项目自测',
                'order' => 6,
                'path' => '/pages/project/index?id={测试项目ID}',
                'type' => 0,
                'updated_at' => '2023-07-12 09:58:41',
            ),
            6 => 
            array (
                'created_at' => '2023-07-12 09:58:41',
                'id' => 7,
                'name' => '商品详情页',
                'order' => 7,
                'path' => '/pages/shop/detail?id={商品ID}',
                'type' => 0,
                'updated_at' => '2023-07-12 09:58:41',
            ),
            7 => 
            array (
                'created_at' => '2023-07-12 09:58:41',
                'id' => 8,
                'name' => '文章详情页',
                'order' => 8,
                'path' => '/pages/article/index?id={文章ID}',
                'type' => 0,
                'updated_at' => '2023-07-12 09:58:41',
            ),
            8 => 
            array (
                'created_at' => '2023-07-12 10:17:47',
                'id' => 9,
                'name' => 'webView页面',
                'order' => 9,
                'path' => '/pages/index/view?url={外部H5链接}',
                'type' => 0,
                'updated_at' => '2023-07-12 10:17:47',
            ),
            9 => 
            array (
                'created_at' => '2025-04-07 19:38:13',
                'id' => 10,
                'name' => '抽奖页面',
                'order' => 10,
                'path' => '/pages/lottery/index?id={抽奖项目}',
                'type' => 0,
                'updated_at' => '2025-04-07 19:38:13',
            ),
        ));
        
        
    }
}