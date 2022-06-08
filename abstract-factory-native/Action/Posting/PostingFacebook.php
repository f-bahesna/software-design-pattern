<?php
declare(strict_types=1);

namespace Posting;

/**
 * @author frada <fbahezna@gmail.com>
 **/
class PostingFacebook implements PostingInterface
{
    function addPosting(): string
    {
        return "Berhasil posting ke facebook";
    }
}