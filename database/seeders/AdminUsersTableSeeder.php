<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$pbXvPgYtHJriHpffxt.2gOBGX8pC/uilE3nKE9d2k7mGBl.hPJhpu',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-30 03:50:34',
                'updated_at' => '2023-06-30 03:50:35',
            ),
        ));
        
        
    }
}