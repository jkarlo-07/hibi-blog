<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $catchPhrase = fake()->catchPhrase();
        $extraWords = fake()->words(rand(1, 5), true);

        $title = $catchPhrase . ' ' . $extraWords;
        return [
            'user_id' => User::factory(),
            'title' => ucfirst($title),
            'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nulla deserunt in. Architecto velit nihil nemo at magni maxime aut quis. Modi doloribus officia, soluta sunt at veritatis voluptas iste!",
            'cover_img' => 'https://picsum.photos/seed/' . rand(0, 10000) . '/800/600',
            'is_featured' => false,
        ];
    }

    public function featured(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'is_featured' => true,
            ];
        });
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Post $post) {
            $tags = Tag::factory()->count(rand(1, 3))->create(); // create 1-3 tags
            $post->tags()->attach($tags->pluck('id'));
        });
    }
}
