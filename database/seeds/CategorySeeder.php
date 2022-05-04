<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'food', 'fitness', 'books', 'health', 'cinema', 'art'
        ];

        foreach($categories as $name) {
            $category = new Category();
            $category->name = $name;
            $category->slug = Str::slug( $name );
            $category->save();
        }
    }
}
