<?php 

    include('../conn.php');

    $sql = "SELECT * FROM book";
    $res = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_assoc($res)) {

        $data[] = $row;

    }

    $fi = array("status"=>200,"msg"=>"all data is here","data"=>$data);

    header('Content-type: text/javascript');
    echo json_encode($fi, JSON_PRETTY_PRINT);

?>