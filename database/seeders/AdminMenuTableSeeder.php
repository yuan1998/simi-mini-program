<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Index',
                'icon' => 'feather icon-bar-chart-2',
                'uri' => '/',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 03:50:34',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Admin',
                'icon' => 'feather icon-settings',
                'uri' => '',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 03:50:34',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 3,
                'title' => 'Users',
                'icon' => '',
                'uri' => 'auth/users',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 03:50:34',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 4,
                'title' => 'Roles',
                'icon' => '',
                'uri' => 'auth/roles',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 03:50:34',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 5,
                'title' => 'Permission',
                'icon' => '',
                'uri' => 'auth/permissions',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 03:50:34',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 6,
                'title' => 'Menu',
                'icon' => '',
                'uri' => 'auth/menu',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 03:50:34',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 7,
                'title' => 'Extensions',
                'icon' => '',
                'uri' => 'auth/extensions',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 03:50:34',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 8,
                'title' => '小程序页面',
                'icon' => NULL,
                'uri' => '/program_pages',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 12:11:14',
                'updated_at' => '2023-06-30 12:11:14',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'order' => 9,
                'title' => 'Banner',
                'icon' => NULL,
                'uri' => '/banners',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 12:15:44',
                'updated_at' => '2023-06-30 12:15:44',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 0,
                'order' => 10,
                'title' => '首页宫格',
                'icon' => NULL,
                'uri' => '/grid_home',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 13:47:58',
                'updated_at' => '2023-06-30 13:47:58',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'order' => 11,
                'title' => '商品分类',
                'icon' => NULL,
                'uri' => '/categories',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 14:53:26',
                'updated_at' => '2023-06-30 14:53:26',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 0,
                'order' => 12,
                'title' => '商品列表',
                'icon' => NULL,
                'uri' => '/products',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 15:13:34',
                'updated_at' => '2023-06-30 15:13:34',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 0,
                'order' => 13,
                'title' => '医生管理',
                'icon' => NULL,
                'uri' => '/doctors',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 16:06:49',
                'updated_at' => '2023-06-30 16:06:49',
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 0,
                'order' => 14,
                'title' => '用户管理',
                'icon' => NULL,
                'uri' => '/users',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-06-30 20:27:08',
                'updated_at' => '2023-06-30 20:27:08',
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 0,
                'order' => 15,
                'title' => '预约列表',
                'icon' => NULL,
                'uri' => '/reservations',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-07-01 10:35:49',
                'updated_at' => '2023-07-01 10:35:49',
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 0,
                'order' => 16,
                'title' => '文章管理',
                'icon' => NULL,
                'uri' => '/articles',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-07-01 11:14:29',
                'updated_at' => '2023-07-01 11:14:29',
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => 0,
                'order' => 17,
                'title' => '自测项目管理',
                'icon' => NULL,
                'uri' => '/test_project',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-07-01 11:42:02',
                'updated_at' => '2023-07-01 11:42:02',
            ),
            17 => 
            array (
                'id' => 18,
                'parent_id' => 0,
                'order' => 18,
                'title' => '自测结果管理',
                'icon' => NULL,
                'uri' => '/test_project_result',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-07-01 12:21:38',
                'updated_at' => '2023-07-01 12:21:38',
            ),
            18 => 
            array (
                'id' => 19,
                'parent_id' => 0,
                'order' => 19,
                'title' => '首页卡片',
                'icon' => NULL,
                'uri' => '/card_home',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-07-02 11:31:50',
                'updated_at' => '2023-07-02 11:31:50',
            ),
            19 => 
            array (
                'id' => 20,
                'parent_id' => 0,
                'order' => 20,
                'title' => '首页配置',
                'icon' => NULL,
                'uri' => '/home_setting',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-07-05 11:11:52',
                'updated_at' => '2023-07-05 11:11:52',
            ),
            20 => 
            array (
                'id' => 21,
                'parent_id' => 0,
                'order' => 21,
                'title' => '预约项目',
                'icon' => NULL,
                'uri' => '/projects',
                'extension' => '',
                'show' => 1,
                'created_at' => '2023-07-29 10:31:18',
                'updated_at' => '2023-07-29 10:31:18',
            ),
            21 => 
            array (
                'id' => 22,
                'parent_id' => 0,
                'order' => 22,
                'title' => '抽奖日志',
                'icon' => NULL,
                'uri' => '/loop_logs',
                'extension' => '',
                'show' => 1,
                'created_at' => '2024-04-06 17:53:55',
                'updated_at' => '2024-04-06 17:53:55',
            ),
        ));
        
        
    }
}