<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;
use App\Models\Comment;

class CreateFakeComment extends Seeder
{

    protected $loop_number = 4;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $posts = Post::all();
        foreach ($posts as $post) {
            $loop = rand(1, $this->loop_number);
            for ($i = 1; $i <= $loop; $i++){
                $faker = Faker::create();
                Comment::create([
                   'content' => $faker->text(200),
                    'post_id' => $post->id
                ]);
            }
       }
    }
}
