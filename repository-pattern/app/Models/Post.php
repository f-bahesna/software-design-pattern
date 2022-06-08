<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * @author frada <fbahezna@gmail.com>
 **/
class Post extends Model
{
    //Contoh data dibawah diambil dari database
    //Biasa kita menggunakan Post::all();
    public function posts()
    {
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
        // TODO: Implement findById method.
    }
}
