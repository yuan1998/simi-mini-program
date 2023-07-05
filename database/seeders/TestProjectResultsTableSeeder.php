<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestProjectResultsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('test_project_results')->delete();
        
        \DB::table('test_project_results')->insert(array (
            0 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'project_id' => 1,
                'score' => 16,
                'answers' => '[{"A:": "周4", "Q:": "今天星期几"}, {"A:": "周6", "Q:": "昨天星期几"}, {"A:": "周5", "Q:": "明天星期几"}]',
                'created_at' => '2023-07-03 18:42:23',
                'updated_at' => '2023-07-03 18:42:23',
            ),
            1 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'project_id' => 1,
                'score' => 14,
                'answers' => '[{"答:": "周2", "问:": "今天星期几"}, {"答:": "周6", "问:": "昨天星期几"}, {"答:": "周5", "问:": "明天星期几"}]',
                'created_at' => '2023-07-03 18:43:00',
                'updated_at' => '2023-07-03 18:43:00',
            ),
        ));
        
        
    }
}