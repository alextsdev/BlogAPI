<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Factories\PostFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Post::factory()->create([
             'title' => 'Test Post',
             'content' => 'This is a test post.',
             'published_at' => now(),
         ]);

        Post::factory(9)->create();
    }
}
