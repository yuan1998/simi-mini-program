<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminExtensionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_extensions')->delete();
        
        \DB::table('admin_extensions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'yuan.grid-sortable',
                'version' => '1.0.0',
                'is_enabled' => 1,
                'options' => NULL,
                'created_at' => '2023-06-30 13:24:13',
                'updated_at' => '2023-06-30 13:24:15',
            ),
        ));
        
        
    }
}