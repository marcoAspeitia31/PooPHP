<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase
{
    public function test_add_comment_to_post()
    {
        $post = new Post();
        $comment = new Comment();

        $post->addComment($comment);

        $this->assertEquals( 1, $post->countComments() ); //comprueba que al menos haya un post con assertEquals
        $this->assertInstanceOf( Comment::class, $post->getCOmments()[0] ); //comprueba que un comentario es una intancia de la clase Comment
    }
}
