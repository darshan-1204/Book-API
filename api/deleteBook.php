<?php 

        
    include('../conn.php');

    if(isset($_POST['id'])) {

        $id = $_POST['id'];

        $sql = "DELETE FROM book WHERE `id`='$id'";

        $res = mysqli_query($conn,$sql);

        if($res) {
            $data = array("status"=>200, "msg"=>"Delete Successfully");
        } else {
            $data = array("status"=>505, "msg"=>"Delete Failed");
        }
        
    } else {
        $data = array("status"=>404, "msg"=>"Data Not Found");
    }

    header('Content-type: text/javascript');
    echo json_encode($data, JSON_PRETTY_PRINT);


?>