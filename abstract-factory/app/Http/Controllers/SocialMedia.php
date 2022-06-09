<?php
namespace App\Http\Controllers;

use App\SocialMedia\Action\Comment\CommentInterface;
use App\SocialMedia\Action\Like\LikeInterface;
use App\SocialMedia\Factory\FacebookActionFactory;
use App\SocialMedia\Factory\SocialMediaFactory;

class SocialMedia extends Controller
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
     * @param SocialMediaFactory $socialMediaActionFactory
     */
    public function __construct(SocialMediaFactory $socialMediaActionFactory)
    {
        $this->comment  = $socialMediaActionFactory->addComment();
        $this->like     = $socialMediaActionFactory->addLike();
    }

    public function action(): array
    {
       return [
            $this->comment->addComment(),
            $this->like->addLike()
       ];
    }
}
