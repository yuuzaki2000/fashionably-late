<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'id' => 1,
            'category_id' =>1,
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'yamada@example.com',
            'tel' => '090-1234-5678',
            'address' => '東京都千代田区1-1',
            'building' => '千代田区ビル',
            'detail' => '違ったものが届いたので返品希望です',
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'id' => 2,
            'category_id' =>2,
            'first_name' => '佐藤',
            'last_name' => '花子',
            'gender' => 2,
            'email' => 'sato@example.com',
            'tel' => '090-1234-5678',
            'address' => '東京都千代田区1-2',
            'building' => '千代田区ビル',
            'detail' => 'お届け希望です',
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'id' => 3,
            'category_id' =>3,
            'first_name' => '鈴木',
            'last_name' => '次郎',
            'gender' => 1,
            'email' => 'suzuki@example.com',
            'tel' => '090-1234-5678',
            'address' => '東京都千駄ヶ谷1-1',
            'building' => '千駄ヶ谷ビル',
            'detail' => 'お届け希望です',
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'id' => 4,
            'category_id' =>2,
            'first_name' => '高橋',
            'last_name' => '三郎',
            'gender' => 1,
            'email' => 'takahashi@example.com',
            'tel' => '090-1234-5678',
            'address' => '東京都亀有1-1',
            'building' => '亀有ビル',
            'detail' => 'お届け希望です',
        ];
        DB::table('contacts')->insert($param);
    }
}
