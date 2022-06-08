<?php
declare(strict_types=1);

/**
 * @author frada <fbahezna@gmail.com>
 **/
class FacebookFactory implements PostFactory {

    function addLike(): LikeInterface
    {
        return new LikeFacebook();
    }

    function addComment(): CommentInterface
    {
        return new CommentFacebook();
    }
}