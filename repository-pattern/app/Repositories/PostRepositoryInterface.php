<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Post;

/**
 * @author frada <fbahezna@gmail.com>
 **/
interface PostRepositoryInterface
{
    public function findAll();
    public function findById(string $id);
    public function save(Post $post);
    public function update(Post $post);
    public function delete(Post $post);
}
