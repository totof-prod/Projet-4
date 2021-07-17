<?php

namespace Blog\Table;

use core\table\Table;

class CommentsTable extends Table
{

    public function findWithPost($id){
        return $this->query("
            SELECT *, comments.id as id
            FROM comments
            LEFT JOIN Post ON Post_id = Post.id
            WHERE Post.id = ?
            ORDER BY comments.comment_date DESC
            ", [$id]);

    }
    public function findsignal($id){
        return $this->query("
            SELECT *, comments.id as id
            FROM comments
            LEFT JOIN Post ON Post_id = Post.id
            WHERE Post.id = ? AND comments.Signalement = 'true'
            ORDER BY comments.comment_date DESC
            ", [$id]);

    }
    public function all()
    {
        return $this->query("
            SELECT *, comments.id as id
            FROM comments
            LEFT JOIN Post ON Post_id = Post.id 
            WHERE comments.Signalement = 'true'
            ");
    }

}