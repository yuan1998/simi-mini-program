<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CardHomesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('card_homes')->delete();
        
        \DB::table('card_homes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'path' => 'images/18e8cdbfbe48e5b39d1b5822a9e3fa89.png',
                'name' => NULL,
                'remark' => '1',
                'target' => '1',
                'order' => 1,
                'enable' => 1,
                'target_type' => 1,
                'created_at' => '2023-07-02 11:34:25',
                'updated_at' => '2023-07-02 11:34:25',
            ),
            1 => 
            array (
                'id' => 2,
                'path' => 'images/ae22100b9ed911a1cb55f84bc5acf7b6.png',
                'name' => NULL,
                'remark' => '2',
                'target' => '1',
                'order' => 2,
                'enable' => 1,
                'target_type' => 2,
                'created_at' => '2023-07-02 11:34:42',
                'updated_at' => '2023-07-02 11:34:42',
            ),
        ));
        
        
    }
}