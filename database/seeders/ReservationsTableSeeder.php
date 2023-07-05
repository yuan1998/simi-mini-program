<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reservations')->delete();
        
        \DB::table('reservations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-07-01 11:00:00',
                'created_at' => '2023-07-01 11:00:45',
                'updated_at' => '2023-07-01 11:03:07',
                'phone' => NULL,
                'name' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-07-03 19:00:00',
                'created_at' => '2023-07-03 16:20:16',
                'updated_at' => '2023-07-03 16:20:16',
                'phone' => NULL,
                'name' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-07-03 19:00:00',
                'created_at' => '2023-07-03 16:20:25',
                'updated_at' => '2023-07-03 16:20:25',
                'phone' => NULL,
                'name' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-07-03 18:00:00',
                'created_at' => '2023-07-03 16:22:57',
                'updated_at' => '2023-07-03 16:22:57',
                'phone' => NULL,
                'name' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-07-03 20:00:00',
                'created_at' => '2023-07-03 18:13:35',
                'updated_at' => '2023-07-03 18:13:35',
                'phone' => NULL,
                'name' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-01-01 00:00:00',
                'created_at' => '2023-07-05 10:06:27',
                'updated_at' => '2023-07-05 10:06:27',
                'phone' => NULL,
                'name' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-01-01 00:00:00',
                'created_at' => '2023-07-05 10:08:34',
                'updated_at' => '2023-07-05 10:08:34',
                'phone' => '13112344321',
                'name' => '吃',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-01-01 00:00:00',
                'created_at' => '2023-07-05 10:16:31',
                'updated_at' => '2023-07-05 10:16:31',
                'phone' => '13112344321',
                'name' => '吃',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-01-01 00:00:00',
                'created_at' => '2023-07-05 10:23:35',
                'updated_at' => '2023-07-05 10:23:35',
                'phone' => '13112344321',
                'name' => '吃sm',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-07-05 13:00:00',
                'created_at' => '2023-07-05 10:48:33',
                'updated_at' => '2023-07-05 10:48:33',
                'phone' => '13112344321',
                'name' => '123',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-07-05 11:00:00',
                'created_at' => '2023-07-05 10:55:27',
                'updated_at' => '2023-07-05 10:55:27',
                'phone' => '13112344321',
                'name' => '123',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-07-05 12:00:00',
                'created_at' => '2023-07-05 10:56:07',
                'updated_at' => '2023-07-05 10:56:07',
                'phone' => '13112344321',
                'name' => '1311234',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-07-05 11:00:00',
                'created_at' => '2023-07-05 10:56:47',
                'updated_at' => '2023-07-05 10:56:47',
                'phone' => '13112344321',
                'name' => '123',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'doctor_id' => 1,
                'status' => 0,
                'enable' => 1,
                'date' => '2023-07-05 11:00:00',
                'created_at' => '2023-07-05 10:59:20',
                'updated_at' => '2023-07-05 10:59:20',
                'phone' => '13112344321',
                'name' => '3',
            ),
        ));
        
        
    }
}