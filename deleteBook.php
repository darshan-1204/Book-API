<?php 
    include('conn.php');
    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $sql = "DELETE FROM book WHERE `id`='$id'";
        mysqli_query($conn,$sql);
        echo "Delete Success";
        header('location:viewBook.php');
    }

?>