<?php
declare(strict_types=1);

/**
 * @author frada <fbahezna@gmail.com>
 **/
interface PostFactory
{
    function addLike(): LikeInterface;
    function addComment(): CommentInterface;
}