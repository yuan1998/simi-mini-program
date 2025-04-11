<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_roles')->delete();
        
        \DB::table('admin_roles')->insert(array (
            0 => 
            array (
                'created_at' => '2023-06-30 03:50:34',
                'id' => 1,
                'name' => 'Administrator',
                'slug' => 'administrator',
                'updated_at' => '2023-06-30 03:50:35',
            ),
        ));
        
        
    }
}