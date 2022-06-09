<?php
declare(strict_types=1);

namespace App\SocialMedia\Factory;

use App\SocialMedia\Action\Comment\CommentInterface;
use App\SocialMedia\Action\Like\LikeInterface;

/**
 * @author frada <fbahezna@gmail.com>
 **/
interface SocialMediaFactory
{
    function addComment(): CommentInterface;
    function addLike(): LikeInterface;
}
