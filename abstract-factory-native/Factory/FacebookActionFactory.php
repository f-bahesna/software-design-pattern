<?php
declare(strict_types=1);

use Comment\CommentFacebook;
use Comment\CommentInterface;
use Like\LikeFacebook;
use Like\LikeInterface;
use Posting\PostingFacebook;
use Posting\PostingInterface;

/**
 * @author frada <fbahezna@gmail.com>
 **/
class FacebookActionFactory extends AbstractPostFactory
{
    function addLike(): LikeInterface
    {
        return new LikeFacebook();
    }

    function addComment(): CommentInterface
    {
        return new CommentFacebook();
    }

    function addPosting(): PostingInterface
    {
        return new PostingFacebook();
    }
}