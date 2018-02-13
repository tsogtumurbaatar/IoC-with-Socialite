<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Post;
use App\Phone;

class postServiceImpl implements postService
{ 
	public function getAll() 
	{
		return Post::orderBy('id','asc')->get();
	}

	public function createPost(Request $request)
	{
		$post = new Post();
		$post->post_title = $request->title;
		$post->post_body = $request->body;
		$post->category_id = $request->category;
		$post->save();

		$phone = new Phone();
		$phone->phonenumber = $request->phone;
		$post->phone()->save($phone);
	}

	public function putPost(Request $request)
	{
		$post = Post::find($request->id);
		$post->post_title = $request->title;
		$post->post_body = $request->body;
		$post->category_id = $request->category;
		$post->save();

		$phone = Phone::where('post_id',$request->id)->first();
		$phone->phonenumber = $request->phone;
		$post->phone()->save($phone);
	}

	public function deletePost($id)
	{
		if(!isset($id))
			return redirect('post');

		$count = Post::where('id',$id)->count();
		
		if($count!=1)
			return redirect('post');

		Post::find($id)->delete();
	}

}
