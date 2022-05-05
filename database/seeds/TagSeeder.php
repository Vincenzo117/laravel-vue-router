<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Meat', 'Fish', 'Vegan', 'Vegetarian', 'Gluten free', 'Lactose free'];

        foreach($tags as $name) {
            Tag::create([
                'name' => $name,
                'slug' => Str::slug($name)
            ]);
        }
    }
}
