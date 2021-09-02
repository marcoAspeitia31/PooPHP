<?php

require __DIR__ . '/vendor/autoload.php';

use App\Author;
use App\Category;
use App\Post;

$author = new Author('Juan', 'juan@correo.com');

$author->login();

$post1 = new Post('title', 'content', 'draft');
$post2 = new Post('title2', 'content2', 'draft2');
$post3 = new Post('title3', 'content3', 'publish');

$author->createPost($post1);
$author->createPost($post2);
$author->createPost($post3);

echo '<pre>';
var_dump($author->getPosts());
echo '</pre>';

$author->deletePost($post3);

$author->logout();

$author->createPost(new Post('title4', 'content4', 'publish'));
$author->editPost($post2, 'title-edit', 'content-edit', 'publish');

echo '<pre>';
var_dump($author->getPosts());
echo '</pre>';

$author->login();

$category = $author->createCategory('deportes');
$category2 = $author->createCategory('viajes');

echo '<pre>';
var_dump($category);
echo '</pre>';

$author->editPost($post1, 'title-edit', 'content-edit', 'publish');

$post1->addCategories($category);
$post2->addCategories($category2);

echo '<pre>';
var_dump($author->getPosts());
echo '</pre>';