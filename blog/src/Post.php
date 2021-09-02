<?php

namespace App;

class Post
{
    protected $title;
    protected $content;
    protected $categories;
    protected $status;

    public function __construct($title, $content, $status)
    {
        $this->title = $title;
        $this->content = $content;
        $this->status = $status;
        $this->categories = [];
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getStatus()
    {
        return $this->status();
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function addCategories(Category $category)
    {
        $this->categories[] = $category;
    }

}