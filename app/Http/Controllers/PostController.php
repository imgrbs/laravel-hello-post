<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\PostRepository;

class PostController extends Controller
{
    protected $postRepo;

    public function __construct() {
        $this->postRepo = new PostRepository();
    }

    public function createPost(Request $request) {
        $CREATED_STATUS_CODE = 201;
        $post = $request->all();
        $this->postRepo->create($post);
        return response()->json($post, $CREATED_STATUS_CODE);
    }

    public function getPosts() {
        $posts = $this->postRepo->getPosts();
        return response()->json($posts);
    }

    public function getPost($postId) {
        $post = $this->postRepo->getPost();
        return response()->json($post);
    }
}
