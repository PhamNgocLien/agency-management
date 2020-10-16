<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agencies')->insert([
            'code' => 101,
            'name' => 'Hoang Nguyen',
            'phone' => '098733222',
            'mail' => 'hoangnguyen@gmail.com',
            'address' => 'Cau Giay, Ha Noi',
            'manager' => 'Le Van Hoang',
            'status' => 0,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('agencies')->insert([
            'code' => 102,
            'name' => 'Phuc Hoang',
            'phone' => '098733333',
            'mail' => 'phuchoang@gmail.com',
            'address' => 'Long Bien, Ha Noi',
            'manager' => 'Nguyen Van Phuc',
            'status' => 0,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('agencies')->insert([
            'code' => 103,
            'name' => 'Dai Nguyen',
            'phone' => '098733444',
            'mail' => 'dainguyen@gmail.com',
            'address' => 'Tu Liem, Ha Noi',
            'manager' => 'Le Van Dai',
            'status' => 0,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('agencies')->insert([
            'code' => 104,
            'name' => 'Bac Giang 1',
            'phone' => '098733555',
            'mail' => 'bacgiang1@gmail.com',
            'address' => 'Yen Dung, Bac Giang',
            'manager' => 'Tong Hoang Truong',
            'status' => 0,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('agencies')->insert([
            'code' => 105,
            'name' => 'Bac Giang 2',
            'phone' => '098733666',
            'mail' => 'bacgiang2@gmail.com',
            'address' => 'Lang Giang, Bac Giang',
            'manager' => 'Nguyen Dang Khoa',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
