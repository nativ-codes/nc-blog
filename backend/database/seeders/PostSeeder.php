<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'My First Post',
            'content' => 'This is the content of my first post.',
        ]);
        Post::create([
            'title' => 'My Second Post',
            'content' => 'This is the content of my second post.',
        ]);
        Post::create([
            'title' => 'My Third Post',
            'content' => 'This is the content of my third post.',
        ]);
    }
}
