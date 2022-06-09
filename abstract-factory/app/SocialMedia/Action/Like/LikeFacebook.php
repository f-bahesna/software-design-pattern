<?php
declare(strict_types=1);

namespace App\SocialMedia\Action\Like;

/**
 * @author frada <fbahezna@gmail.com>
 **/
class LikeFacebook implements LikeInterface
{
    function addLike(): string
    {
        return "Berhasil like di facebook";
    }
}
