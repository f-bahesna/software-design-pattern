<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * @author frada <fbahezna@gmail.com>
 **/
class Post extends Model
{
    public function findAll(): Collection
    {
        return Post::all();
    }

    public function findById()
    {
        return Post::find();
    }
}
