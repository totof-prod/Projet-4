<?php

namespace Blog\Controller\admin;
use \App;
use core\html\BootstrapForm;

class CategoryController extends AppController
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
        $flash = $this->flash();
        $this->render('admin.index', compact('posts', 'categories', 'flash'));
    }
    public function add(){

        if (!empty($_POST)) {

            $result = $this->category->create([
                    'name' => $_POST['name']
                ]
            );
            if ($result) {
                $this->setFlash('La categorie à bien été ajoutée', 'success');
                return $this->index();
            }
        }
        $categories = $this->category->extract('id', 'name');
        $form = new BootstrapForm($_POST);
        $this->render('admin.category.edit', compact('form', 'categories'));

    }
    public function edit(){

if (!empty($_POST)) {

    $result = $this->category->update($_GET['id'], [
            'name' => $_POST['name']
        ]
    );
    if ($result) {
        $this->setFlash('La categorie à bien été Modifiée', 'success');
        return $this->index();
    }
}
    $category = $this->category->find($_GET['id']);
    $form = new BootstrapForm($category);
    $this->render('admin.category.edit', compact('form'));


    }
    public function  delete(){

        if (!empty($_POST)){

            $result = $this->category->delete($_POST['id']);
            $this->setFlash('La categorie à bien été supprimée', 'success');
            return $this->index();

        }
    }


}