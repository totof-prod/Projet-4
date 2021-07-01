<?php
namespace Blog\Controller;


use core\QueryBuilder;

class demoController extends AppController
{
    private $select = [];
public function index(){

    $query = new QueryBuilder();
       echo $query->select('id', 'title', 'content')
           ->from('post,comments')
           ->Where('post.category_id = 1')
           ->where('post.creation_date > NOW()');
}

}