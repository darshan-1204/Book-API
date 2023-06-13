<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "darshan";


    $conn = new mysqli($servername, $username, $password,$dbname);

    //  if($conn){
    //      echo "Database is connected!!";
    //  }
    //  else{
    //      echo "Connection Failed!!";
    //  }

    // $cn = mysqli_connect("localhost","root","","darshan");

    // if ($cn) {
    //     print("<br>Success....");
    // }else{
    //     echo "Check The Connection...";
    // }


    // //  Inserting Data into database
    // $sql = "INSERT INTO `food` (`id`, `name`, `price`, `isveg`) VALUES (NULL, 'vadapav', '70', '0');";


    //  echo "<br>";

    //  if (mysqli_query($cn,$sql)) {
    //     echo "Data Inserted Succesfully!!!";
    //  }else{
    //     echo "Please Check the Error!!";
    //  }

?>