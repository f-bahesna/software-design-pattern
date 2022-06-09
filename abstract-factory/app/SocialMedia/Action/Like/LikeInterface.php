<?php
declare(strict_types=1);

namespace App\SocialMedia\Action\Like;

/**
 * @author frada <fbahezna@gmail.com>
 **/
interface LikeInterface
{
    function addLike(): string;
}
