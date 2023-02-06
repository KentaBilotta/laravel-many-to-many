<?php

use App\Post;
use App\Category;
use Illuminate\Http\File;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = [

        ];

        $categories = Category::all('id')->all();
        for ($i = 0; $i < 100; $i++) {
            $title = $faker->words(rand(3, 7), true);

            $number = rand(0, 10);
            if ($number) {
                $contents = new File(__DIR__ . '/../../storage/app/lorempicsum/picsum' . $number . '.jpeg');

                $img_path = Storage::put('uploads', $contents);
            } else {
                $img_path = null;
            }

            Post::create([
                'category_id' => $faker->randomElement($categories)->id,
                'slug'      => Post::getSlug($title),
                'title'     => $title,
                'image'     => 'https://picsum.photos/id/'. rand(1, 1000) .'/500/400',
                'uploaded_img' => $img_path,
                'content'   => $faker->paragraphs(rand(1, 10), true),
                'excerpt'   => $faker->paragraph(),
            ]);
        }
    }
}
