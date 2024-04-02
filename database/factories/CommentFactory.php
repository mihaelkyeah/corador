<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userCount = \App\Models\User::count();
        $productCount = \App\Models\Product::count();

        $userId = (int)rand(1,$userCount);
        // $replyTo = rand(0,1) < 1 ? false : true;
        $replyToId = null;
        // if($replyTo) {
        //     while($replyToId === null) {
        //         $replyToId = (int)rand(0,$userCount);
        //         if($replyToId === $userId)
        //             $replyToId = null;
        //     }
        // }
        $rating = !$replyToId ? rand(1,5) : null;

        return [
            'product_id' => rand(1,$productCount),
            'user_id' => $userId,
            'reply_to_id' => $replyToId,
            'rating' => $rating,
            'content' => fake()->text(500)
            //
        ];
    }
}
