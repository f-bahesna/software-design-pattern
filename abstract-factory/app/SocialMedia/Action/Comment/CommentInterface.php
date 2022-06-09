<?php
declare(strict_types=1);

namespace App\SocialMedia\Action\Comment;

/**
 * @author frada <fbahezna@gmail.com>
 **/
interface CommentInterface
{
    function addComment(): string;
}
