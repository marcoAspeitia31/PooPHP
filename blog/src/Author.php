<?php

namespace App;

use App\User;
use App\Category;

class Author extends User
{
    private $created_posts;
    private $posts = array();

    public function __construct($name, $email)
    {
        parent::__construct($name, $email);
    }

    /* ======== POSTS ======== */
    public function createPost(Post $post)
    {
        if($this->getLogin())
        {
            $this->posts[] = $post;
        }
        else
        {
            return 'No puedes crear un post si no estás logueado';
        }
    }

    public function editPost(Post $post, $title, $content, $status)
    {
        if($this->getLogin() == true)
        {
            foreach($this->posts as $individual_post)
            {
                if($individual_post == $post)
                {
                    $individual_post->setTitle($title);
                    $individual_post->setContent($content);
                    $individual_post->setStatus($status);
                }
            }
        }
        else
        {
            return 'Debes de estar logueado para editar un post';
        }
    }
    
    public function deletePost(Post $post)
    {
        if($this->getLogin() == true)
        {
            if(($key = array_search($post, $this->posts, true)) !== false) {
                unset($this->posts[$key]);
            }
            return $this->posts;
        }
        else
        {
            return 'Debes de estar logueado para eliminar un post';
        }
    }

    public function getPosts()
    {
        return $this->posts;
    }

    /* ======== CATEGORIES ======== */

    public function createCategory($name) : Category
    {
        if($this->getLogin())
        {
            $category = new Category($name);
            return $category;
        }
        else
        {
            return "necesitas estar logueado para agregar categorias";
        }
    }
}