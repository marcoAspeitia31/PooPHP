<?php

namespace App; //this namespace was defined in composer.json

class Post
{
    protected $comments = [];

    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
    }

    public function countComments()
    {
        return count( $this->comments );
    }

    public function getComments()
    {
        return $this->comments;
    }
}