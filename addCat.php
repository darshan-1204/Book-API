<?php

    include("conn.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $que = "SELECT * FROM book WHERE id='$id'";
        $res = mysqli_query($conn, $que);
        $data = mysqli_fetch_assoc($res);
    }

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "UPDATE category SET `name`='$name' WHERE `id`='$id'";
        } else {
            $sql = "INSERT INTO category(`name`) VALUES('$name')";
        }
            
        $q = mysqli_query($conn,$sql);

        if($q){
            header('location:viewBook.php');
        }else{
            echo "Data Inserted Failed!!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book Details</title>
</head>
<body>
    <center>

        <h2>Add Category Details</h2>
        <form action="" method="post">
            <div style="width: 500px;" class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="bname" name="name" value="<?php echo @$data['bname']; ?>" placeholder="Name">
            </div>
           
            <input type="submit" value="Add" name="submit" style="width: 100px; cursor:pointer; height:40px;border-radius:20px;background-color:cornflowerblue;">
        </form>
    </center>
</body>
</html>