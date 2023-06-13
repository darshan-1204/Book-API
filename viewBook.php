<?php 
    include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   <title>Document</title>
    <link rel="stylesheet" href="css/table.css">
    <script src="js/script.js"></script>
</head>
<body>

<table class="container">
	<thead>
		<tr>
			<th><h1>id</h1></th>
			<th><h1>Name</h1></th>
			<th><h1>Author</h1></th>
			<th><h1>Price</h1></th>
			<th><h1>Action</h1></th>
		</tr>
	</thead>
	<tbody>
        <?php 
            $que = "SELECT * FROM book";
            $res = mysqli_query($conn,@$que);
            while($row = mysqli_fetch_assoc($res)) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['bname']; ?></td>
                <td><?php echo $row['bauthor']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td>
                    <a href="addBook.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary">EDIT</button></a>
                    <a href="deleteBook.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">DELETE</button></a>
                </td>
            </tr>
        <?php } ?>
	</tbody>
</table>
</body>
</html>