<?php 

    include('../conn.php');

    if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['author']) && isset($_POST['price'])) {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $author = $_POST['author'];
        $price = $_POST['price'];

        $sql = "UPDATE book SET `bname`='$name', `bauthor`='$author', `price`='$price' WHERE `id`='$id'";

        $res = mysqli_query($conn,$sql);

        if($res) {
            $data = array("status"=>200, "msg"=>"Update Successfully");
        } else {
            $data = array("status"=>505, "msg"=>"Update Failed");
        }
        
    } else {
        $data = array("status"=>404, "msg"=>"Data Not Found");
    }

    header('Content-type: text/javascript');
    echo json_encode($data, JSON_PRETTY_PRINT);

?>