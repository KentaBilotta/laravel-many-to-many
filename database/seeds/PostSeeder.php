<?php

use Faker\Generator as Faker;
use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $title = $faker->words(rand(3, 7), true);
            Post::create([
                'slug'      => $title,
                'title'     => $title,
                'image'     => 'https://picsum.photos/id/'. rand(1, 1000) .'/500/400',
                'content'   => $faker->paragraphs(rand(1, 10), true),
                'excerpt'   => $faker->paragraph(),
            ]);
        }
    }
}
