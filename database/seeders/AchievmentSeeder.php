<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AchievmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('achievment')->insert([
            [
                'kode_achievment' => 'A001',
                'time_from' => '07:31',
                'time_to' => '08:30'
            ],
            [
                'kode_achievment' => 'A002',
                'time_from' => '08:31',
                'time_to' => '09:30'
            ],
            [
                'kode_achievment' => 'A003',
                'time_from' => '09:31',
                'time_to' => '10:30'
            ],
            [
                'kode_achievment' => 'A004',
                'time_from' => '10:31',
                'time_to' => '11:30'
            ],
            [
                'kode_achievment' => 'A005',
                'time_from' => '11:31',
                'time_to' => '12:30'
            ],
            [
                'kode_achievment' => 'A006',
                'time_from' => '12:31',
                'time_to' => '13:30'
            ],
            [
                'kode_achievment' => 'A007',
                'time_from' => '13:31',
                'time_to' => '14:30'
            ],
            [
                'kode_achievment' => 'A008',
                'time_from' => '14:31',
                'time_to' => '15:30'
            ],
            [
                'kode_achievment' => 'A009',
                'time_from' => '15:31',
                'time_to' => '16:30'
            ],
            [
                'kode_achievment' => 'A010',
                'time_from' => '16:31',
                'time_to' => '17:30'
            ],
            [
                'kode_achievment' => 'A011',
                'time_from' => '17:31',
                'time_to' => '18:30'
            ],
            [
                'kode_achievment' => 'A012',
                'time_from' => '18:31',
                'time_to' => '19:30'
            ],
            [
                'kode_achievment' => 'A013',
                'time_from' => '19:31',
                'time_to' => '20:30'
            ],
        ]);
    }
}
