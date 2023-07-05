<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_settings')->delete();
        
        \DB::table('admin_settings')->insert(array (
            0 => 
            array (
                'slug' => 'BANNER_TITLE',
                'value' => '首页头图Banner标题',
                'created_at' => '2023-07-05 11:12:53',
                'updated_at' => '2023-07-05 15:13:39',
            ),
            1 => 
            array (
                'slug' => 'CARD_TITLE',
                'value' => '首页卡片模块标题',
                'created_at' => '2023-07-05 11:12:53',
                'updated_at' => '2023-07-05 15:13:39',
            ),
            2 => 
            array (
                'slug' => 'home',
                'value' => '{"BANNER_TITLE":"312","CARD_TITLE":"123"}',
                'created_at' => '2023-07-05 11:12:01',
                'updated_at' => '2023-07-05 11:12:01',
            ),
        ));
        
        
    }
}