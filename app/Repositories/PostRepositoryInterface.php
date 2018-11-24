<?php

namespace App\Repositories;

interface PostRepositoryInterface {
    public function create($post);
    public function getPosts();
    public function getPost($postId);
}
