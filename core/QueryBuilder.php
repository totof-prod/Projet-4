<?php


namespace core;


class QueryBuilder
{
    private $select = [];
    private $conditions = [];
    private $fields = [];

    public function select(){
        $this->select = func_get_args();
        return $this;
    }
    public function where(){
        foreach (func_get_args() as $arg) {
            $this->conditions[] = $arg;
        }
        return $this;
    }
    public function from($table, $alias = null){
        if(is_null($alias)){
            $this->fields[] = $table;
        }
        $this->fields[] = "$table as $alias";
        return $this;
    }
    public function __toString(){
        return 'SELECT ' . implode(', ', $this->select) .
            ' FROM ' . implode('', $this->fields) .
            ' WHERE ' . implode(' AND ', $this->conditions);

    }
}