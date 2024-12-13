<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *  User::factory()->create([
            *'name' => 'Test User',
           * 'email' => 'test@example.com',
       * ]);
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(UserTableSeeder::class);
        $this->call(ProfileTableSeeder::class);
        $this->call(ArtistTableSeeder::class);
        $this->call(AlbumTableSeeder::class);
        $this->call(SongTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        
    }
}
