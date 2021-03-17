<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Page;

class ImportPageAndPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Articoli
         */
       $old_posts = DB::connection('source')->table('articoli')->get();
        foreach ($old_posts as $old_post) {
            Post::create([
                'title' => $old_post->titolo,
                'content' => $old_post->contenuto
            ]);
       }
        /**
         * Pagine
         */
        $old_pages = DB::connection('source')->table('pagine')->get();
        foreach ($old_pages as $old_page) {
            Page::create([
                'title' => $old_page->titolo,
                'content' => $old_page->contenuto
            ]);
        }
    }
}
