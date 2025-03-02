<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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
            'content' => '商品の交換'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'id' => 2,
            'content' => '要望'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'id' => 3,
            'content' => 'クレーム'
        ];
        DB::table('categories')->insert($param);
    }
}
