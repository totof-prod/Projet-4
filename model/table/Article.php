<?php

namespace Blog\table;

use Blog\App;

class Article extends Table {


   public static function getLast(){
        return App::getDatabase()->query(
            "
                SELECT posts.id, posts.title, posts.content, categories.name as categorie
                FROM posts 
                LEFT JOIN categories 
                    ON category_id = categories.id"
                , __CLASS__);
    }
    public function getUrl(){
    return 'index.php?p=article&id=' . $this->id;
}

    public  function getExtrait(){
    $html = '<p>'. substr($this->content, 0, 100) . '  ...</p>';
    $html .= '<p><a href="'. $this->getURL() . '"> Voir la suite <a/></p>';
    return $html;
}


}
