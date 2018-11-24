<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'content' => 'ที่ดิน ทรัพย์อันติดกับที่ดิน หรือประกอบเป็นอันเดียวกับที่ดิน รวมทั้งสิทธิทั้งหลายอันเกี่ยวกับกรรมสิทธิ์ที่ดินด้วย',
        ]);

        DB::table('posts')->insert([
            'content' => 'ที่ดิน ทรัพย์อันติดกับที่ดิน หรือประกอบเป็นอันเดียวกับที่ดิน รวมทั้งสิทธิทั้งหลายอันเกี่ยวกับกรรมสิทธิ์ที่ดินด้วย',
        ]);

        DB::table('posts')->insert([
            'content' => 'ที่ดิน ทรัพย์อันติดกับที่ดิน หรือประกอบเป็นอันเดียวกับที่ดิน รวมทั้งสิทธิทั้งหลายอันเกี่ยวกับกรรมสิทธิ์ที่ดินด้วย',
        ]);
    }
}
