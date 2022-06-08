<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;

class PostController extends Controller
{
    /**
     * @var PostRepository
     */
    private $postRepository;

    /**
     * @param PostRepository $repository
     */
    public function __construct(PostRepository $repository)
    {
        $this->postRepository = $repository;
    }

    public function findAllPosts()
    {
        return $this->postRepository->findAll();
    }
}
