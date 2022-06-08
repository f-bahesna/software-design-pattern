<?php

namespace App\Repositories;

use App\Models\Post;

/**
 * @author frada <fbahezna@gmail.com>
 **/
final class PostRepository implements PostRepositoryInterface
{
    /**
     * @var Post
     */
    private $postModel;

    /**
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->postModel = $post;
    }

    public function findAll()
    {
        $posts = $this->postModel->posts();

        return $posts;
    }

    public function findById(string $id)
    {
        // TODO: Implement findById() method.
    }

    public function save(Post $post)
    {
        // TODO: Implement save() method.
    }

    public function update(Post $post)
    {
        // TODO: Implement update() method.
    }

    public function delete(Post $post)
    {
        // TODO: Implement delete() method.
    }
}
