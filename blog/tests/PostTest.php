<?php

use PHPUnit\Framework\TestCase;

use App\Category;
use App\Post;

class PostTest extends TestCase
{
    public function testAddCategories()
    {
        $post = new Post('Titulo', 'contenido', 'status');
        $category = new Category('videojuegos');

        $this->assertInstanceOf(Category::class, $category);

        $post->addCategories($category);


    }
}