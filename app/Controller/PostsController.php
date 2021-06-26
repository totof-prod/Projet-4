<?php
  namespace Blog\Controller;

  use core\Controller\Controller;

  class PostsController extends AppController
  {

      public function __construct()
      {
          parent::__construct();
          $this->loadModel('post');
          $this->loadModel('category');
      }

      public function index()
      {


          $posts = $this->post->last();
          $categories = $this->category->all();

          $this->render('article.index', compact('posts', 'categories'));


      }

      public function category()
      {
          $category = $this->category->find($_GET['id']);
          if ($category === false) {
              $this->notFound();
          }
          $article = $this->post->lastByCategory($_GET['id']);
          $categories = $this->category->all();

          $this->render('article.category', compact('article', 'categories', 'category'));
      }

      public function single()
      {

          $post = $this->post->findWithCategory($_GET['id']);
          $this->render('article.single', compact('post'));


      }
  }