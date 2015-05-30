<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Session\Store;
//use Request;
use Illuminate\Support\Facades\Redirect;
use Input;
class PostController extends Controller {
        public $restful = 'true';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Post $postModel)
	{
       // $posts = Post::latest('published_at')->get();

        $posts = $postModel->getPublishedPosts();
		return view('post.index', ['posts' => $posts]);
	}

    public function unpublished(Post $postModel)
    {
        // $posts = Post::latest('published_at')->get();

        $posts = $postModel->getUnpublishedPosts();
        return view('post.index', ['posts' => $posts]);
    }

    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function show($id)
    {
        $posts = Post::find($id);
       // $posts = Post::all()->where('id', '=', $id);
        //return view('post.post', compact('posts'));
        //$posts = $postModel->getShowPosts();
        //return view('post.post', compact('posts'));
       // ->with('post', Post::find('$id'));
     return $posts;
    }

	public function create()
	{

		return view('create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function post_Store()
    {
        DB::table('posts')->insert
            ([
            'title' => Input::get('title'),
            'slug' => Input::get('slug'),
            'content' => Input::get('content'),
            'published_at' => Input::get('published_at')
             ]);
        return Redirect('/');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{

        return view('edit')->with('posts')  ;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function post_update()
	{
        $id = Input::get('id');
        //Post::updateOrCreate
        DB::table('posts')->update($id, array(
            'title'=>Input::get('title'),
            'slug' => Input::get('slug'),
            'content' => Input::get('content'),
            'published_at' => Input::get('published_at')
        ));

        /*DB::table('posts')->update
        ([
            'title' => Input::get('title'),
            'slug' => Input::get('slug'),
            'content' => Input::get('content'),
            'published_at' => Input::get('published_at')
        ]);*/
       // $posts->update($request->all());
        return Redirect('/');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function delete()
    {

        return view('destroy');
    }
	public function postDestroy()
	{
        DB::table('posts')->delete
        ([
            'id' => Input::get('id')

        ]);
        return Redirect('/');
	}

}
