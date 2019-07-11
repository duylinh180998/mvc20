<?php
require_once "controllers/Controller.php";
require_once "models/Book.php";

class BookController extends Controller {
    public function index(){
        $book=new Book();
        $books=$book->getAll();
        require_once 'views/books/index.php';
    }
    public function add(){

        if(isset($_POST['save'])){
            $name=$_POST['name'];
            $id=$_POST['id'];
            $bookinsert= new Book();
            $isinsert=$bookinsert->addBook($id,$name);
            if($isinsert){
                $_SESSION['insert']="Thêm Thành công";
                header("Location:index.php");

            }
            else{
                header("Location:index.php");
                $_SESSION['insert']="Thêm Thất bại";
            }
        }
        require_once 'views/books/add.php';
    }
    public function update(){
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['insert'] = 'Tham số không hợp lệ';
            header("Location: index.php");
            exit();
        }
        $id=$_GET['id'];
        $getbook=new Book();
        $getbookbyid=$getbook->getBookById($id);
        if(isset($_POST['Update'])){
//            print_r($_POST);
//            die();
            $name=$_POST['name'];
            $book=[
                'id'=>$id,
                'name'=>$name,
            ];
            $isupdate=$getbook->updateBook($getbookbyid);
            if ($isupdate){
                $_SESSION['insert']="Sua Thành công";
                header("Location:index.php");

            }
            else{
                header("Location:index.php");
                $_SESSION['insert']="Sua Thất bại";

            }

        }
        require_once 'views/books/update.php';
    }
    public function delete(){
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            //khai báo session hiển thị lỗi, được hiển thị tại file views/layouts/header.php
            $_SESSION['error'] = 'Tham số không hợp lệ';
            //hàm chuyển hướng bên dưới không cần truyền vào controller và action
            //thì mặc định sẽ có controller=book và action=show
            //theo như cách đã code trong file gốc index.php của ứng dụng
            header("Location: index.php");
            //cần có lệnh exit sau lệnh header, để tránh lỗi ko chuyển hướng được
            exit();
        }
        $bookModel = new Book();
        $id = $_GET['id'];
        $isDelete = $bookModel->deleteBook($id);
        if ($isDelete) {
            $_SESSION['success'] = "Xóa bản ghi #$id thành công";
        } else {
            $_SESSION['error'] = "Xóa bản ghi #$id thất bại";
        }
        header("Location: index.php");
        //cần có lệnh exit sau lệnh header, để tránh lỗi ko chuyển hướng được
        exit();
    }
    public function deital(){
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            header("Location: index.php");
        }
        $bookModel = new Book();
        //lấy ra thông tin của book;
        $book = $bookModel->getBookById($_GET['id']);

        require_once 'views/books/deital.php';
    }
}