<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class DatabaseSeeder extends Seeder {

    public function run()
    {
        Model::unguard();
        $this->call('PostSeeder');
        // $this->call('UserTableSeeder');
    }

}
class PostSeeder extends Seeder {
    public function run()
    {
        DB::table('Posts')->delete();

        Post::create([
            'title' => 'First post',
            'slug' => 'first-post',
            'content' => '<b>Content of first post body</p>',
            'published' => true,
            'published_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        Post::create([
            'title' => 'Second post',
            'slug' => 'second-post',
            'content' => '<b>Content of Second post body</p>',
            'published' => false,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        Post::create([
            'title' => 'Third post',
            'slug' => 'third-post',
            'content' => '<b>Content of third post body</p>',
            'published' => false,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

    }


}
