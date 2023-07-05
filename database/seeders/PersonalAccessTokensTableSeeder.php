<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personal_access_tokens')->delete();
        
        \DB::table('personal_access_tokens')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'token',
                'token' => 'e19294eb2f2a3a32a5919704017d7f18a9c01a4491e125bb7d2aa15cdf63c6b7',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'expires_at' => NULL,
                'created_at' => '2023-06-30 18:34:36',
                'updated_at' => '2023-06-30 18:34:36',
            ),
            1 => 
            array (
                'id' => 2,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'token',
                'token' => '5533dbac2334963d3148519e31dabccdd57c9f180964de604a66c39fa12c3986',
                'abilities' => '["*"]',
                'last_used_at' => '2023-07-05 14:45:25',
                'expires_at' => NULL,
                'created_at' => '2023-06-30 19:45:22',
                'updated_at' => '2023-07-05 14:45:25',
            ),
            2 => 
            array (
                'id' => 3,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'token',
                'token' => '3a1e831a44705bb03ac13ddca280d989ba9cdd757b64dfcbcf1b4dae01d762db',
                'abilities' => '["*"]',
                'last_used_at' => '2023-07-05 14:27:05',
                'expires_at' => NULL,
                'created_at' => '2023-07-01 10:46:14',
                'updated_at' => '2023-07-05 14:27:05',
            ),
            3 => 
            array (
                'id' => 4,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'token',
                'token' => '05b6601e00e169b208c2e60edc9f942b8fabfa9ac89cc465787e80dcf6ae6f67',
                'abilities' => '["*"]',
                'last_used_at' => '2023-07-05 14:30:36',
                'expires_at' => NULL,
                'created_at' => '2023-07-05 14:27:10',
                'updated_at' => '2023-07-05 14:30:36',
            ),
            4 => 
            array (
                'id' => 5,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'token',
                'token' => '9084c19538adca4e0b65adc0b67e57a049a20f2c008e842598b6538a7fb98988',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'expires_at' => NULL,
                'created_at' => '2023-07-05 14:30:41',
                'updated_at' => '2023-07-05 14:30:41',
            ),
            5 => 
            array (
                'id' => 6,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'token',
                'token' => '77ec05288b628c51fdf34d245d77c306919da46ea7636f0ce412d2f44448773d',
                'abilities' => '["*"]',
                'last_used_at' => '2023-07-05 14:35:43',
                'expires_at' => NULL,
                'created_at' => '2023-07-05 14:30:42',
                'updated_at' => '2023-07-05 14:35:43',
            ),
            6 => 
            array (
                'id' => 7,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'token',
                'token' => '36810b3146d52b77d3ab5b9bd865e2f689ea1e5997a8c62e90b20bcd13b88aa4',
                'abilities' => '["*"]',
                'last_used_at' => '2023-07-05 15:14:38',
                'expires_at' => NULL,
                'created_at' => '2023-07-05 14:37:23',
                'updated_at' => '2023-07-05 15:14:38',
            ),
        ));
        
        
    }
}