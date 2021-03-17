<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CreateCategory extends Seeder
{
    protected $categories = ['Php', 'Javascript', 'Java', 'React', 'Vue', 'SQL', 'C#', 'C++', 'HTML', 'CSS'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->categories as $category) {
            Category::create(['title' => $category]);
        }
    }
}
