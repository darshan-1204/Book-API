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
        $author = $_POST['author'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "UPDATE book SET `bname`='$name', `bauthor`='$author', `price`='$price', `category`='$category' WHERE `id`='$id'";
        } else {
            $sql = "INSERT INTO book(`bname`,`bauthor`,`price`,`category`) VALUES('$name','$author','$price','$category')";
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

        <h2>Add Book Details</h2>
        <form action="" method="post">
            <div style="width: 500px;" class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Book Name</label>
                <input type="text" class="form-control" id="bname" name="name" value="<?php echo @$data['bname']; ?>" placeholder="Name">
            </div>
            <div style="width: 500px;" class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Book Author</label>
                <input type="text" class="form-control" id="author" name="author" value="<?php echo @$data['bauthor'];?>" placeholder="Author">
            </div>
            <div class="mb-3" style="width: 500px;">
                <label for="exampleFormControlInput1" class="form-label">Book Price</label>
                <input type="number" class="form-control" id="price" name="price" value="<?php echo @$data['price'];?>" placeholder="0000/-">
            </div>
            <div class="mb-3" style="width: 500px;">
                <label for="exampleFormControlInput1" class="form-label">Book Cover Page</label>
                <input type="file" class="form-control" id="profile" name="profile" value="<?php echo @$data['profile'];?>" placeholder="0000/-">
            </div>
           
            <div class="mb-3" style="width: 500px;">
                <select class="form-control" name="category" id="">
                    <?php 
                        $sqls = "SELECT * FROM category";
                        $res = mysqli_query($conn, $sqls);
                        while($row = mysqli_fetch_assoc($res)) {

                    ?>
                    <option value="<?php echo $row['id']; ?>" <?php if($row['id']==@$data['category']) { echo "selected";} ?>><?php echo $row['name']; ?></option>
                        <?php 
                        }
                        ?>
                </select>
            </div>
           
            <input type="submit" value="Add" name="submit" style="width: 100px; cursor:pointer; height:40px;border-radius:20px;background-color:cornflowerblue;">
        </form>
    </center>
</body>
</html>