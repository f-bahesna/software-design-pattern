<?php
declare(strict_types=1);

namespace App\SocialMedia\Action\Comment;

/**
 * @author frada <fbahezna@gmail.com>
 **/
class CommentFacebook implements CommentInterface
{
    function addComment(): string
    {
        return "Berhasil comment di facebook";
    }
}
