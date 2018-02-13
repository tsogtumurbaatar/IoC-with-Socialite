<?php
namespace App\Services;

use Illuminate\Http\Request;

interface postService
{
    public function getAll();

    public function createPost(Request $request);

    public function putPost(Request $request);

	public function deletePost($id);    
}
