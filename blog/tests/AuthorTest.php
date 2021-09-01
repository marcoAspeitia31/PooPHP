<?php

use PHPUnit\Framework\TestCase;
use App\Author;
use App\Post;
use App\Category;

class AuthorTest extends TestCase
{
    public function testCreatePost()
    {
        //
        $post = new Post();
        $category = new Category();

        $post->addCategory($category);

        
    }

    public function testEditPost(Post $post)
    {
        //
    }

    public function testDeletePost(Post $post)
    {
        //
    }

    public function editProfileInformation()
    {
        //
    }
}