<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'id' => 5,
                'path' => 'images/WX20230607-175833@2x.png',
                'remark' => '2',
                'target' => '1',
                'order' => 1,
                'enable' => 1,
                'created_at' => '2023-06-30 13:30:14',
                'updated_at' => '2023-07-02 11:27:09',
                'target_type' => 1,
            ),
            1 => 
            array (
                'id' => 7,
                'path' => 'images/WX20230607-180139@2x.png',
                'remark' => '3',
                'target' => NULL,
                'order' => 2,
                'enable' => 1,
                'created_at' => '2023-06-30 13:32:37',
                'updated_at' => '2023-06-30 13:37:34',
                'target_type' => 0,
            ),
            2 => 
            array (
                'id' => 8,
                'path' => 'images/WX20230607-191206@2x.png',
                'remark' => 'ces',
                'target' => '1',
                'order' => 1,
                'enable' => 1,
                'created_at' => '2023-06-30 13:36:03',
                'updated_at' => '2023-07-02 11:27:18',
                'target_type' => 2,
            ),
            3 => 
            array (
                'id' => 9,
                'path' => 'images/77e032e4812ed2d65f45c74342ad3778.png',
                'remark' => 'ces',
                'target' => NULL,
                'order' => 3,
                'enable' => 1,
                'created_at' => '2023-06-30 13:37:30',
                'updated_at' => '2023-06-30 13:37:30',
                'target_type' => 0,
            ),
        ));
        
        
    }
}