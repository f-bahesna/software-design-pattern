<?php
declare(strict_types=1);

namespace Comment;

/**
 * @author frada <fbahezna@gmail.com>
 **/
class CommentFacebook implements CommentInterface
{
    function addComment(): string
    {
        return "Berhasil comment di Facebook";
    }
}