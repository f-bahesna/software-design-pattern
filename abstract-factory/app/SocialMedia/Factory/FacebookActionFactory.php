<?php
declare(strict_types=1);

namespace App\SocialMedia\Factory;

use App\SocialMedia\Action\Comment\CommentFacebook;
use App\SocialMedia\Action\Comment\CommentInterface;
use App\SocialMedia\Action\Like\LikeFacebook;
use App\SocialMedia\Action\Like\LikeInterface;

/**
 * @author frada <fbahezna@gmail.com>
 **/
class FacebookActionFactory implements SocialMediaFactory
{
    public function addComment(): CommentInterface
    {
        return new CommentFacebook();
    }

    public function addLike(): LikeInterface
    {
        return new LikeFacebook();
    }
}
