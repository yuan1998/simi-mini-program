<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doctors')->delete();
        
        \DB::table('doctors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '王花花',
                'enable' => 1,
                'created_at' => '2023-06-30 16:07:33',
                'updated_at' => '2023-06-30 16:07:33',
            ),
        ));
        
        
    }
}