<?php

namespace Blog\table;

use Blog\App;

class Categorie extends Table {

    protected static $table;

    public function getUrl(){
        return 'index.php?p=categorie&id=' . $this->id;
    }
}