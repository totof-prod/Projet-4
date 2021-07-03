<?php


namespace Blog\Table;

use core\table\Table;

class PostTable extends Table
{
    /**
     * recup les derniers articles
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT Post.id, Post.title, Post.content, Post.creation_date, Category.name as categorie
            FROM Post
            LEFT JOIN Category ON category_id = category.id
            ORDER BY Post.creation_date DESC");
    }

    /**
     * recup un articles en liant la category
     * @param $id
     * @return
     */
    public function findWithCategory($id){
        return $this->query("
            SELECT Post.id, Post.title, Post.content, Post.creation_date, Category.name as categorie
            FROM Post
            LEFT JOIN Category ON category_id = category.id
            WHERE Post.id = ?
            ", [$id], true);

    }

    public function lastByCategory($id){
        return $this->query("
            SELECT Post.id, Post.title, Post.content, Post.creation_date, Category.name as categorie
            FROM Post
            LEFT JOIN Category ON category_id = category.id
            WHERE Post.category_id = ?
            ORDER BY Post.creation_date DESC", [$id]);


    }

}