<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrCreate([
            'email' => 'test@example.com',
        ], [
            'name' => 'Test User',
            'password' => bcrypt('password'), 
        ]);

        $post = Post::firstOrCreate([
            'song_id' => 1,
        ], [
            'post_content' => 'Default post content',
            'user_id' => $user->id, 
        ]);

        $c = new Comment;
        $c->commenting = 'how can this be you goof';
        $c->post_id = $post->id;
        $c->user_id = $user->id; 
        $c->save();

        Comment::factory()->count(5)->create([
            'post_id' => $post->id,
            'user_id' => $user->id,
        ]);
    }
}
