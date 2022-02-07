<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;

class PostTableSeeder extends Seeder
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
                'user_id' => 1,
                'title' => 'Cara belajar programming yang efektif di tahun 2022',
                'slug' => Str::slug('Cara belajar programming yang efektif di tahun 2022'),
                'body' => 'blablablabla',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'user_id' => 2,
                'title' => 'Cara bermain binomo',
                'slug' => Str::slug('Cara bermain binomo'),
                'body' => 'blablablabla',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]
        ];

        Post::insert($posts);
    }
}
