<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ImportPageAndPost::class);
        $this->call(CreateFakeComment::class);
        $this->call(CreateCategory::class);
    }
}
