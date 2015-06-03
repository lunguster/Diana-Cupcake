<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Session\Store;
use Request;
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
        //dd($posts->title);
        return view('post.post', compact('posts'));
       // $posts = Post::all()->where('id', '=', $id);
        //return view('post.post', compact('posts'));
        //$posts = $postModel->getShowPosts();
         // ->with('post', Post::find('$id'));
     //return $posts;
    }

	public function create()
	{

		return view('post.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store() //Post $postModel, Request $request
    {
       /* dd($request->all());
        $postModel->create($request->all());
        return redirect()->route('posts');
    }*/
   //public function post_store() //Requests\createPostRequest $request
    //{
        $input = Request::all();
        Post::create($input);
        //return $input;
        //Post::create($request->all());
    /* $id = DB::table('posts')->insertGetId
            ([
            'title' => Input::get('title'),
            'slug' => Input::get('slug'),
            'content' => Input::get('content'),
            'published' => Input::get('published'),
            'published_at' => Input::get('published_at')
     ]);*/
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
	public function edit($id)
	{
        $posts = Post::findOrFail($id);
        return view('edit', compact('posts'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $posts = Post::findOrFail($id);
        $posts->update(Request::all());
       //$posts = Input::get($id);

        //Post::updateOrCreate
      /*  $id = $request->Input('id');
      DB::table('posts')->where('id', $id)->update([
            'title'=>Input::get('title'),
            'slug' => Input::get('slug'),
            'content' => Input::get('content')*/
           //'published' => Input::get('published')
            //'published_at' => Input::get('published_at')
       // ]);


        /*DB::table('posts')->update
        ([
            'title' => Input::get('title'),
            'slug' => Input::get('slug'),
            'content' => Input::get('content'),
            'published_at' => Input::get('published_at')
        ]);*/
       // $posts->update($request->all());
        return Redirect('posts');
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
	public function destroy()
	{
        DB::table('posts')->delete
        ([
            'id' => Input::get('id')

        ]);
        return Redirect('/');
	}

    /**
     * @return string
     */
    public function getRestful()
    {
        return $this->restful;
    }

}
