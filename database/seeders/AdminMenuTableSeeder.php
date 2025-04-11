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
                'created_at' => '2023-06-30 03:50:34',
                'extension' => '',
                'icon' => 'feather icon-bar-chart-2',
                'id' => 1,
                'order' => 1,
                'parent_id' => 0,
                'show' => 1,
                'title' => 'Index',
                'updated_at' => NULL,
                'uri' => '/',
            ),
            1 => 
            array (
                'created_at' => '2023-06-30 03:50:34',
                'extension' => '',
                'icon' => 'feather icon-settings',
                'id' => 2,
                'order' => 2,
                'parent_id' => 0,
                'show' => 1,
                'title' => 'Admin',
                'updated_at' => NULL,
                'uri' => '',
            ),
            2 => 
            array (
                'created_at' => '2023-06-30 03:50:34',
                'extension' => '',
                'icon' => '',
                'id' => 3,
                'order' => 3,
                'parent_id' => 2,
                'show' => 1,
                'title' => 'Users',
                'updated_at' => NULL,
                'uri' => 'auth/users',
            ),
            3 => 
            array (
                'created_at' => '2023-06-30 03:50:34',
                'extension' => '',
                'icon' => '',
                'id' => 4,
                'order' => 4,
                'parent_id' => 2,
                'show' => 1,
                'title' => 'Roles',
                'updated_at' => NULL,
                'uri' => 'auth/roles',
            ),
            4 => 
            array (
                'created_at' => '2023-06-30 03:50:34',
                'extension' => '',
                'icon' => '',
                'id' => 5,
                'order' => 5,
                'parent_id' => 2,
                'show' => 1,
                'title' => 'Permission',
                'updated_at' => NULL,
                'uri' => 'auth/permissions',
            ),
            5 => 
            array (
                'created_at' => '2023-06-30 03:50:34',
                'extension' => '',
                'icon' => '',
                'id' => 6,
                'order' => 6,
                'parent_id' => 2,
                'show' => 1,
                'title' => 'Menu',
                'updated_at' => NULL,
                'uri' => 'auth/menu',
            ),
            6 => 
            array (
                'created_at' => '2023-06-30 03:50:34',
                'extension' => '',
                'icon' => '',
                'id' => 7,
                'order' => 7,
                'parent_id' => 2,
                'show' => 1,
                'title' => 'Extensions',
                'updated_at' => NULL,
                'uri' => 'auth/extensions',
            ),
            7 => 
            array (
                'created_at' => '2023-06-30 12:11:14',
                'extension' => '',
                'icon' => NULL,
                'id' => 8,
                'order' => 8,
                'parent_id' => 0,
                'show' => 1,
                'title' => '小程序页面',
                'updated_at' => '2023-06-30 12:11:14',
                'uri' => '/program_pages',
            ),
            8 => 
            array (
                'created_at' => '2023-06-30 12:15:44',
                'extension' => '',
                'icon' => NULL,
                'id' => 9,
                'order' => 9,
                'parent_id' => 0,
                'show' => 1,
                'title' => 'Banner',
                'updated_at' => '2023-06-30 12:15:44',
                'uri' => '/banners',
            ),
            9 => 
            array (
                'created_at' => '2023-06-30 13:47:58',
                'extension' => '',
                'icon' => NULL,
                'id' => 10,
                'order' => 10,
                'parent_id' => 0,
                'show' => 1,
                'title' => '首页宫格',
                'updated_at' => '2023-06-30 13:47:58',
                'uri' => '/grid_home',
            ),
            10 => 
            array (
                'created_at' => '2023-06-30 14:53:26',
                'extension' => '',
                'icon' => NULL,
                'id' => 11,
                'order' => 11,
                'parent_id' => 0,
                'show' => 1,
                'title' => '商品分类',
                'updated_at' => '2023-06-30 14:53:26',
                'uri' => '/categories',
            ),
            11 => 
            array (
                'created_at' => '2023-06-30 15:13:34',
                'extension' => '',
                'icon' => NULL,
                'id' => 12,
                'order' => 12,
                'parent_id' => 0,
                'show' => 1,
                'title' => '商品列表',
                'updated_at' => '2023-06-30 15:13:34',
                'uri' => '/products',
            ),
            12 => 
            array (
                'created_at' => '2023-06-30 16:06:49',
                'extension' => '',
                'icon' => NULL,
                'id' => 13,
                'order' => 13,
                'parent_id' => 0,
                'show' => 1,
                'title' => '医生管理',
                'updated_at' => '2023-06-30 16:06:49',
                'uri' => '/doctors',
            ),
            13 => 
            array (
                'created_at' => '2023-06-30 20:27:08',
                'extension' => '',
                'icon' => NULL,
                'id' => 14,
                'order' => 14,
                'parent_id' => 0,
                'show' => 1,
                'title' => '用户管理',
                'updated_at' => '2024-08-30 15:44:36',
                'uri' => '/wechat_users',
            ),
            14 => 
            array (
                'created_at' => '2023-07-01 10:35:49',
                'extension' => '',
                'icon' => NULL,
                'id' => 15,
                'order' => 15,
                'parent_id' => 0,
                'show' => 1,
                'title' => '预约列表',
                'updated_at' => '2023-07-01 10:35:49',
                'uri' => '/reservations',
            ),
            15 => 
            array (
                'created_at' => '2023-07-01 11:14:29',
                'extension' => '',
                'icon' => NULL,
                'id' => 16,
                'order' => 16,
                'parent_id' => 0,
                'show' => 1,
                'title' => '文章管理',
                'updated_at' => '2023-07-01 11:14:29',
                'uri' => '/articles',
            ),
            16 => 
            array (
                'created_at' => '2023-07-01 11:42:02',
                'extension' => '',
                'icon' => NULL,
                'id' => 17,
                'order' => 17,
                'parent_id' => 0,
                'show' => 1,
                'title' => '自测项目管理',
                'updated_at' => '2023-07-01 11:42:02',
                'uri' => '/test_project',
            ),
            17 => 
            array (
                'created_at' => '2023-07-01 12:21:38',
                'extension' => '',
                'icon' => NULL,
                'id' => 18,
                'order' => 18,
                'parent_id' => 0,
                'show' => 1,
                'title' => '自测结果管理',
                'updated_at' => '2023-07-01 12:21:38',
                'uri' => '/test_project_result',
            ),
            18 => 
            array (
                'created_at' => '2023-07-02 11:31:50',
                'extension' => '',
                'icon' => NULL,
                'id' => 19,
                'order' => 19,
                'parent_id' => 0,
                'show' => 1,
                'title' => '首页卡片',
                'updated_at' => '2023-07-02 11:31:50',
                'uri' => '/card_home',
            ),
            19 => 
            array (
                'created_at' => '2023-07-05 11:11:52',
                'extension' => '',
                'icon' => NULL,
                'id' => 20,
                'order' => 20,
                'parent_id' => 0,
                'show' => 1,
                'title' => '首页配置',
                'updated_at' => '2023-07-05 11:11:52',
                'uri' => '/home_setting',
            ),
            20 => 
            array (
                'created_at' => '2023-07-29 10:31:18',
                'extension' => '',
                'icon' => NULL,
                'id' => 21,
                'order' => 21,
                'parent_id' => 0,
                'show' => 1,
                'title' => '预约项目',
                'updated_at' => '2023-07-29 10:31:18',
                'uri' => '/projects',
            ),
            21 => 
            array (
                'created_at' => '2024-04-06 17:53:55',
                'extension' => '',
                'icon' => NULL,
                'id' => 22,
                'order' => 25,
                'parent_id' => 24,
                'show' => 1,
                'title' => '抽奖日志-旧版',
                'updated_at' => '2025-04-07 15:23:58',
                'uri' => '/loop_logs',
            ),
            22 => 
            array (
                'created_at' => '2025-04-05 09:27:14',
                'extension' => '',
                'icon' => NULL,
                'id' => 23,
                'order' => 23,
                'parent_id' => 24,
                'show' => 1,
                'title' => '抽奖活动',
                'updated_at' => '2025-04-05 09:27:36',
                'uri' => '/loop_lottery',
            ),
            23 => 
            array (
                'created_at' => '2025-04-05 09:27:26',
                'extension' => '',
                'icon' => NULL,
                'id' => 24,
                'order' => 22,
                'parent_id' => 0,
                'show' => 1,
                'title' => '营销抽奖',
                'updated_at' => '2025-04-05 09:27:36',
                'uri' => NULL,
            ),
            24 => 
            array (
                'created_at' => '2025-04-07 15:23:50',
                'extension' => '',
                'icon' => NULL,
                'id' => 25,
                'order' => 24,
                'parent_id' => 24,
                'show' => 1,
                'title' => '抽奖结果',
                'updated_at' => '2025-04-07 15:23:58',
                'uri' => '/loop_lottery_logs',
            ),
        ));
        
        
    }
}