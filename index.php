<?php
    include("conn.php");

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $isVeg = $_POST['isVeg'];

       $sql = "INSERT INTO food(`name`,`price`,`isveg`) VALUES ('$name','$price','$isVeg')";
       $q = mysqli_query($conn,$sql);

       if($q) {
            echo "Data inserted!!";
       } else {
            echo "Data Insert Failed";
       }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    
<section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
    <div class="box">
        <div class="sqaure" style="--i:0;"></div>
        <div class="sqaure" style="--i:1;"></div>
        <div class="sqaure" style="--i:2;"></div>
        <div class="sqaure" style="--i:3;"></div>
        <div class="sqaure" style="--i:4;"></div>
        <div class="container">
            <div class="form">
                <h2>Login Form</h2>
                <form method="post">
                    <div class="inputbox">
                        <input type="text" name="name" placeholder="Enter Name" />
                    </div>
                    <div class="inputbox">
                    <input type="number" name="price" placeholder="Enter price" />
                    </div>
                    <div class="inputbox">
                        <select name="isVeg">
                            <option value="">Select One</option>
                            <option value="1">Veg</option>
                            <option value="0">Non-Veg</option>
                        </select>
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="submit" value="Add">
                        <p class="forget">Forgot Password ?<a href="#">Click Here</a></p>
                        <p class="forget">Don't have an account ?<a href="#">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
    <!-- <form method="post">
        <span>Name</span>
        <input type="text" name="name" placeholder="Enter Name" /><br><br>
        <span>Price</span>
        <input type="number" name="price" placeholder="Enter price" /><br><br>
        <span>is Veg</span>
        <select name="isVeg">
            <option value="">Select One</option>
            <option value="1">Veg</option>
            <option value="0">Non-Veg</option>
        </select><br><br>
        <input type="submit" name="submit">
    </form> -->

</body>
</html>