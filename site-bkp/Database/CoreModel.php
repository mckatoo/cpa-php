<?php

namespace Database;

use Acme\Interfaces\Imodel;
use Database\Connection;

class CoreModel implements Imodel{
    private $database;
    private $attributes;

    public function __construct(){
        $database = new Connection;
        $this->database = $database->connection();
    }

    public function create($attributes){

    }

    public function read(){
        $query = "select * from $this->table";
        $pdo = $this->database->prepare($query);
        try{
            $pdo->execute();
            return $pdo->fetchAll();
        }catch(PDOException $e){
            dump($e->getMessage());
        }
    }

    public function update($id, $attributes){

    }

    public function delete($id, $value){

    }

    public function fundBy($id, $value){

    }
}

?>
