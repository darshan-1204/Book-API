<?php 

    include('../conn.php');

    if(isset($_POST['name']) && isset($_POST['author']) && isset($_POST['price'])) {

        $name = $_POST['name'];
        $author = $_POST['author'];
        $price = $_POST['price'];

        $sql = "INSERT INTO book(`bname`,`bauthor`,`price`) VALUES('$name','$author','$price')";
        $q = mysqli_query($conn,$sql);

        if($q) {
            $data = array("status_code"=>200, "msg"=>"Book Added Success");
        } else {
            $data = array("status_code"=>400, "msg"=>"Book is not Added!");
        }
        
    } else {
        $data = array("status_code"=>404, "msg"=>"Data Not Found");
    }

    header('Content-type: text/javascript');
    echo json_encode($data, JSON_PRETTY_PRINT);

?>