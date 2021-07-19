<?php
namespace Blog\Controller;

use core\Controller\Controller;
use core\HTML\BootstrapForm;

class PostsController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('post');
        $this->loadModel('category');
        $this->loadModel('comments');
    }
    public function index()
    {
        $posts = $this->post->all();
        $categories = $this->category->all();
        $comments = $this->comments;
        $this->render('index', compact('posts', 'categories', 'comments' ));

    }
    public function book()
    {
        $category = $this->category->find($_GET['id']);
        if ($category === false) {
            $this->notFound();
        }
        $posts = $this->post->all();
        $postsByCat = $this->post->articleByCategory($_GET['id']);
        $categories = $this->category->all();
        $this->render('book.book', compact('postsByCat', 'posts', 'categories', 'category'));
    }
    public function single()
    {
        $post = $this->post->findWithCategory($_GET['id']);
        $comments = $this->comments->findWithPost($_GET['id']);
        $categories = $this->category->all();
        $posts = $this->post->all();
        if($post){
            $this->render('episode.single', compact('post', 'posts',  'categories','comments'));
        }else{
            $this->notFound();
        }
    }
    public function addComment(){
        if (!empty($_POST)) {
            $result = $this->comments->create([
                    'author' => $_POST['author'],
                    'comment' => $_POST['comment'],
                    'post_id' => $_POST['id'],
                    'comment_date' => date("Y-m-d H:i:s")]
            );
            if ($result) {
                $this->setFlash('ton commentaire a bien été ajouté', 'success');
                return $this->index();
            }
        }
        $form = new BootstrapForm($_POST);
        $this->setFlash('ton commentaire a bien été ajouté', 'success');
        $this->render('article.edit', compact('form'));

    }
    public function signal()
    {
        if (!empty($_POST)) {
            $result = $this->comments->update($_POST['id'], ['Signalement' => $_POST['Signalement']]);
            if ($result) {
                $this->setFlash('ton commentaire a bien été signaler', 'success');
                return $this->index();
            }
        }
    }


}