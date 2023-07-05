<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminExtensionHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_extension_histories')->delete();
        
        \DB::table('admin_extension_histories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'yuan.grid-sortable',
                'type' => 1,
                'version' => '1.0.0',
                'detail' => 'Initialize extension.',
                'created_at' => '2023-06-30 13:24:13',
                'updated_at' => '2023-06-30 13:24:13',
            ),
        ));
        
        
    }
}