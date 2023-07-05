<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GridHomesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('grid_homes')->delete();
        
        \DB::table('grid_homes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'path' => 'images/WX20230607-175747@2x.png',
                'name' => '测试',
                'remark' => '1',
                'target' => '1',
                'order' => 2,
                'enable' => 1,
                'created_at' => '2023-06-30 14:40:14',
                'updated_at' => '2023-07-02 11:25:10',
                'target_type' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'path' => 'images/87131e9035713f6758afd560c081f8fd.png',
                'name' => '2',
                'remark' => '2',
                'target' => NULL,
                'order' => 1,
                'enable' => 1,
                'created_at' => '2023-06-30 14:43:10',
                'updated_at' => '2023-06-30 14:43:24',
                'target_type' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'path' => 'images/5876a07829d66bba32bd9ae57fff6be2.png',
                'name' => 'c1',
                'remark' => 'ces',
                'target' => '1',
                'order' => 3,
                'enable' => 1,
                'created_at' => '2023-07-02 10:41:09',
                'updated_at' => '2023-07-02 11:25:04',
                'target_type' => 1,
            ),
        ));
        
        
    }
}