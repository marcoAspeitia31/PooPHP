<?php

use PHPUnit\Framework\TestCase;
use App\Author;
use App\Post;
use App\Category;

class AuthorTest extends TestCase
{
    public function testCreatePost()
    {
        // Code
        $author = new Author('Juan', 'juan@correo.com');
        $post = new Post('titulo del articulo', 'contenido del articulo', 'draft');

        $author->login();

        $this->assertTrue($author->getLogin());
        $this->assertInstanceOf(Post::class, $post);
        
        $author->createPost($post);
        
    }

    public function testEditPost()
    {
        //Code
        $author = new Author('Juan', 'juan@correo.com');
        $post = new Post('titulo 2', 'contenido 2', 'publish');

        $author->login();

        $this->assertTrue($author->getLogin());

        $this->assertInstanceOf(Post::class, $post);

        $author->editPost($post, 'titulo editado', 'contenido editado', 'draft');

    }

    public function testCreateCategory()
    {
        $author = new Author('Juan', 'juan@correo.com');
        $category_name = 'deportes';

        $author->login();

        $this->assertTrue($author->getLogin());

        $this->assertIsString($category_name);
        $author->createCategory($category_name);

    }
}