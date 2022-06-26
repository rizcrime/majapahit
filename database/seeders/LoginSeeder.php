<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('login')->insert([
            [
                'username' => '10001',
                'password' => md5('testpass'),
                "created_at" => '2021-01-01 08:00:00',
                'created_by' => 'System'
            ],
            [
                'username' => '10002',
                'password' => md5('testpass'),
                "created_at" => '2021-01-01 08:00:00',
                'created_by' => 'System'
            ]
        ]);
    }
}
