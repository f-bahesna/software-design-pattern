<?php
declare(strict_types=1);

use Comment\CommentInterface;
use Like\LikeInterface;
use Posting\PostingInterface;

/**
 * @author frada <fbahezna@gmail.com>
 **/
Abstract class AbstractPostFactory
{
    abstract function addLike(): LikeInterface;
    abstract function addComment(): CommentInterface;
    abstract function addPosting(): PostingInterface;
}