<?php


namespace Blog\Entity ;

use core\Entity\Entity;

class PostEntity extends Entity{


public function getUrl(){
    return 'index.php?p=posts.single&id=' . $this->id;
}
public function getExtrait(){

    $html =  substr($this->content,0, 100 ). '...';
    $html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a></p>';
    return $html;
}

}