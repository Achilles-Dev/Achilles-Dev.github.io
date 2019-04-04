<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts');
        
        $posts = [];
        $faker = Factory::create();
        $date = Carbon::create(2019,7,18,9);

        for($i = 1; $i <= 10; $i++)
        {
            $date->addDays(1);
            $createdDate = clone($date);
            
            
            Post::create([
                'title' => $faker->text(8,12),
                'body' => $faker->paragraphs(rand(10,15), true),
                'user_id' => rand(1,3),
                'category_id' => rand(1,3),
                'created_at' => $createdDate,
                'updated_at' => $createdDate,
            ]);
        }
    }
}

