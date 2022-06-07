<?php

namespace App\Repositories;

use App\Models\Post;

/**
 * @author frada <fbahezna@gmail.com>
 **/
final class PostRepository implements PostRepositoryInterface
{
    public function findAll()
    {
        //Data dari database
        return [
            [
                'id' => 1,
                'image' => 'makanan_sehat.jpg',
                'caption' => 'Hello guys kali ini aku pesen makanan sehat di blablabla.com',
                'location' => 'Jakarta, Indonesia'
            ],
            [
                'id' => 2,
                'image' => 'minuman_sehat.jpg',
                'caption' => 'Hello guys kali ini aku pesen minuman sehat di blablabla.com',
                'location' => 'Jakarta, Indonesia'
            ],
            [
                'id' => 3,
                'image' => 'cemilan_sehat.jpg',
                'caption' => 'Hello guys kali ini aku pesen cemilan sehat di blablabla.com',
                'location' => 'Jakarta, Indonesia'
            ],
        ];
    }

    public function findById(string $id)
    {
        return Post::find($id);
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
