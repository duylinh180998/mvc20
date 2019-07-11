<?php
require_once "models/Model.php";
class Book extends Model{
    public $connection;
    public function getAll(){
        $connection=$this->OpenConnect();
        $querySelect="SELECT * FROM books";
        $resutls=mysqli_query($connection,$querySelect);
        $books=[];
        if(mysqli_num_rows($resutls)>0){
            $books=mysqli_fetch_all($resutls,MYSQLI_ASSOC);
        }
        mysqli_close($connection);
        return $books;
    }
    public function addBook($id,$name){
            $connection=$this->OpenConnect();
            $queryInsert="INSERT INTO books(`id`,`name`) VALUE ('$id','$name')";
            $is_insert=mysqli_query($connection,$queryInsert);
            mysqli_close($connection);
            if ($is_insert){
                return true;
            }
            return false;

    }
    public function deleteBook($id){
        $connection=$this->OpenConnect();
        $queryInsert="DELETE FROM books WHERE id=$id";
        $is_delelte=mysqli_query($connection,$queryInsert);
        if ($is_delelte){
            return true;
        }
        return false;
    }
    public function getBookById($id){
        $connection = $this->OpenConnect();
        $querySelect1 = "SELECT * FROM books WHERE id=$id LIMIT 1";
        $results = mysqli_query($connection, $querySelect1);
        $book = [];
        if (mysqli_num_rows($results) > 0) {
            $book = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $book = $book[0];
        }
        mysqli_close($connection);
        return $book;
    }
    public function updateBook($book){
        $connection=$this->OpenConnect();
        $queryUpdate = "UPDATE books SET name = '{$book['name']}' WHERE id = {$book['id']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        if ($isUpdate) {
            return TRUE;
        }
        return FALSE;
    }
}