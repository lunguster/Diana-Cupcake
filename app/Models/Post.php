<?php namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Request;

class Post extends Eloquent {

    protected $fillable = [
        'title',
        'slug',
        'content',
        'published',
        'published_at'
    ];



    public function getPublishedPosts(){
        $posts = $this->latest('published_at')->published()->get();
        return $posts;
    }
    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now())
            ->where('published', '=', 1);
    }
    public function getUnpublishedPosts()
    {
        $posts = $this->latest('published_at')->unpublished()->get();
        return $posts;
    }

    public function scopeUnpublished($query){
        $query->where('published_at', '=>', Carbon::now())
            ->orWhere('published', '=', 0);
    }

    public function getShowPosts(){
        $posts = Post::all();
        return $posts;
    }

	/*public function postCreate()
    {
             DB::table('posts')->insert
            ([
            'title' => Input::get('title'),
            'slug' => Input::get('slug'),
            'content' => Input::get('content')
             ]);
    }*/

}
