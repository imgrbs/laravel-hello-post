<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function create($post) {
        $newPost = new Post();
        return $newPost->create($post);
    }

    public function getPosts() {
        return Post::get();
    }

    public function getPost($postId) {
        return Post::where('id', $postId)->get()->first();
    }
}
