<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories');

        DB::table('categories')->insert([
            [
                'title' => 'School',
                'slug' => 'School-Work'
            ],
            [
                'title' => 'Church',
                'slug' => 'Church-Work'
            ],
            [
                'title' => 'House',
                'slug' => 'House-Work'   
            ]

            
        ]);

        for ($post_id = 1; $post_id <= 10; $post_id++)
        {
            $category_id = rand(1,3);
            DB::table('posts')->where('id', $post_id)->update(['category_id' => $category_id]);
        }
    }
}
