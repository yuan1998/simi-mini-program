<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('test_projects')->delete();
        
        \DB::table('test_projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '一组基于项目问卷&自测对私密项目是否有帮助的对照实验',
                'remark' => '测试',
                'enable' => 1,
                'question_data' => '"[{\\"title\\":\\"\\\\u4eca\\\\u5929\\\\u661f\\\\u671f\\\\u51e0\\",\\"questions\\":[{\\"answer\\":\\"\\\\u5468\\\\u4e00\\",\\"score\\":\\"1\\"},{\\"answer\\":\\"\\\\u54682\\",\\"score\\":\\"2\\"},{\\"answer\\":\\"\\\\u54683\\",\\"score\\":\\"3\\"},{\\"answer\\":\\"\\\\u54684\\",\\"score\\":\\"4\\"}]},{\\"title\\":\\"\\\\u6628\\\\u5929\\\\u661f\\\\u671f\\\\u51e0\\",\\"questions\\":[{\\"answer\\":\\"\\\\u5468\\\\u4e00\\",\\"score\\":\\"1\\"},{\\"answer\\":\\"\\\\u54682\\",\\"score\\":\\"2\\"},{\\"answer\\":\\"\\\\u54683\\",\\"score\\":\\"3\\"},{\\"answer\\":\\"\\\\u54684\\",\\"score\\":\\"4\\"},{\\"answer\\":\\"\\\\u54685\\",\\"score\\":\\"5\\"},{\\"answer\\":\\"\\\\u54686\\",\\"score\\":\\"6\\"}]},{\\"title\\":\\"\\\\u660e\\\\u5929\\\\u661f\\\\u671f\\\\u51e0\\",\\"questions\\":[{\\"answer\\":\\"\\\\u5468\\\\u4e00\\",\\"score\\":\\"1\\"},{\\"answer\\":\\"\\\\u54682\\",\\"score\\":\\"3\\"},{\\"answer\\":\\"\\\\u54683\\",\\"score\\":\\"4\\"},{\\"answer\\":\\"\\\\u54684\\",\\"score\\":\\"5\\"},{\\"answer\\":\\"\\\\u54685\\",\\"score\\":\\"6\\"}]}]"',
                'end_msg' => '<p>3-100分: 天才</p>
<p>2-3分: Genius</p>
<p>0-1分: Stupid</p>',
                'created_at' => '2023-07-01 11:58:32',
                'updated_at' => '2023-07-03 18:41:15',
            ),
        ));
        
        
    }
}