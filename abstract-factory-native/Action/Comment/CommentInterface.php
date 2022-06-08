<?php
declare(strict_types=1);

namespace Comment;
/**
 * @author frada <fbahezna@gmail.com>
 **/
interface CommentInterface
{
    function addComment(): string;
}