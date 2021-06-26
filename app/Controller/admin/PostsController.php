<?php
namespace Blog\Controller\admin;


class PostsController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('post');
        $this->loadModel('category');
    }
    public function index(){
        $posts = $this->post->all();
        $categories= $this->category->all();

        $this->render('admin.index', compact('posts', 'categories'));
    }


}