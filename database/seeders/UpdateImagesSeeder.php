<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UpdateImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::whereNull('image')
            ->orWhere('image', '')
            ->orWhere('image', ' ')
            ->get();
        $faker = Faker::create();

        foreach ($posts as $post) {
            $post->update([
                'image' => $faker->imageUrl(640, 480, 'nature', true, 'Laravel Blog')
            ]);
        }

        $this->command->info(count($posts) . ' registros actualizados con imágenes.');
    }
}
