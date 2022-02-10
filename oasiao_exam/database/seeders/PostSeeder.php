<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Post 1',
                'extract' => 'Test Post 1',
                'content' => 'Test Post 1',
                'access' => 'public',
                'publication' => '2022/02/10',
                'user_id' => 1
            ],
            [
                'title' => 'Post 2',
                'extract' => 'Test Post 2',
                'content' => 'Test Post 2',
                'access' => 'public',
                'publication' => '2022/02/10',
                'user_id' => 1
            ]
        ];

        DB::table('posts')->insert($posts);
    }
}
