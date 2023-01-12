<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $posts = [
            [
                'title' => 'Post one',
                'excerpt' => 'Summary of Post One',
                'body' => 'Body of post one',
                'image_path'=>'Empty',
                'is_published' => false,
                'min_to_read' => 2,
            ],
            [
                'title' => 'Post two',
                'excerpt' => 'Summary of Post two',
                'body' => 'Body of post two',
                'image_path'=>'Empty',
                'is_published' => false,
                'min_to_read' => 2,
            ]
        ];

        foreach($posts as $key => $value){
            Post::create($value);

        }
    }
}
