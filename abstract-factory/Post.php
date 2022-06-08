<?php
declare(strict_types=1);

/**
 * @author frada <fbahezna@gmail.com>
 **/
class Post
{
    /**
     * @var CommentInterface
     */
    private $comment;

    /**
     * @var LikeInterface
     */
    private $like;

    public function __construct(PostFactory $PostFactory)
    {
        $this->comment  = $PostFactory->addComment();
        $this->like     = $PostFactory->addLike();
    }

    public function add()
    {
        $this->comment->addComment();
        $this->like->addLike();
    }
}