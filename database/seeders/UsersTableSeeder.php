<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'avatar' => 'https://thirdwx.qlogo.cn/mmopen/vi_32/POgEwh4mIHO4nibH0KlMECNjjGxQUq24ZEaGT4poC6icRiccVGKSyXwibcPq4BWmiaIGuG1icwxaQX6grC9VemZoJ8rg/132',
                'nike_name' => '微信用户',
                'language' => NULL,
                'province' => NULL,
                'country' => NULL,
                'city' => NULL,
                'gender' => 0,
                'openid' => 'o9Qs85SLFKqEnjqtnXt6h8KSo8Hs',
                'session_key' => '9px6rpiIe9PMLJA8Y3DpXw==',
                'unionid' => NULL,
                'enable' => 1,
                'created_at' => '2023-07-01 10:46:14',
                'updated_at' => '2023-07-05 14:37:23',
                'name' => '吃sm',
                'phone' => '13112344321',
            ),
        ));
        
        
    }
}