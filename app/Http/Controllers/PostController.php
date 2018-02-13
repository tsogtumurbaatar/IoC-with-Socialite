<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Phone;
use App\Category;

use App\Services\postService;

class PostController extends Controller
{
    private $postService;

    public function __construct(postService $postService)
    {
        $this->postService = $postService;
    } 


    public function index()
    { 	
 		$posts = $this->postService->getAll();
		
        return view('post')
			->with('posts',$posts); 
    }

    public function edit($id)
    { 	
		if(!isset($id))
    		return redirect('post');

    	$count = Post::where('id',$id)->count();
    	
    	if($count!=1)
    		return redirect('post');


 		$post = Post::find($id);

		return view('post-edit')
			->with('post',$post); 
    }

    public function save(Request $request)
    {
    	$this->validate($request, [
   		 'title' => 'required:integer',
    	 'body' => 'required',
		]);

        $this->postService->createPost($request);
		$posts = $this->postService->getAll();

		return view('post')
			->with('posts',$posts); 
    }

     public function put(Request $request)
    {
    	$this->validate($request, [
   		 'title' => 'required:integer',
    	 'body' => 'required',
		]);

        $this->postService->putPost($request);

    	return redirect('post');
    }

      public function delete($id)
    {
        $this->postService->deletePost($id);

		$posts = $this->postService->getAll();
		
		return view('post')
			->with('posts',$posts); 
    }
}
