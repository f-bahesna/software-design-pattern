<?php
declare(strict_types=1);

use Comment\CommentInterface;
use Like\LikeInterface;
use Posting\PostingInterface;

/**
 * @author frada <fbahezna@gmail.com>
 **/
class Action
{
    /**
     * @var CommentInterface
     */
    private $comment;

    /**
     * @var LikeInterface
     */
    private $like;

    /**
     * @var PostingInterface
     */
    private $posting;

    public function __construct(AbstractPostFactory $PostFactory)
    {
        $this->comment  = $PostFactory->addComment();
        $this->like     = $PostFactory->addLike();
        $this->posting  = $PostFactory->addPosting();
    }

    public function add()
    {
        $this->comment->addComment();
        $this->like->addLike();
        $this->posting->addPosting();
    }
}