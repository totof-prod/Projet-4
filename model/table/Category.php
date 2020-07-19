<?php

namespace Blog\table;

use Blog\App;

class Category extends Table {

    protected static $table= 'categories';

    public function getUrl(){
        return 'index.php?p=categorie&id=' . $this->id;
    }
}