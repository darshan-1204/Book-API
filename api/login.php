<?php 

    include('../conn.php');
    if(isset($_POST['email']) && isset($_POST['password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE `email`='$email' AND `password`='$password'";
        $res = mysqli_query($conn, $sql);


        if(mysqli_num_rows($res) == 1) {
            $row = mysqli_fetch_assoc($res);

            $e = $row['email'];
            $n = $row['name'];
    
            $d = array("email"=>"$e","Name"=>"$n");
            $data = array("status"=>200,"msg"=>"Login Success","Data"=>$d);
        } else {
            $data = array("status"=>404,"msg"=>"Login Failed","Data"=>"");
        }
        
    } else {
        $data = array("status"=>404,"msg"=>"Data not Found","Data"=>"");
    }

    header('Content-type: text/javascript');
    echo json_encode($data, JSON_PRETTY_PRINT);


?>