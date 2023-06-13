<?php 
    include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/table.css">
    <script src="js/script.js"></script>
</head>
<body>
<h1><span class="blue">&lt;</span>Table<span class="blue">&gt;</span> <span class="yellow">Responsive</pan></h1>
<h2>Created with love by <a href="https://github.com/pablorgarcia" target="_blank">Pablo García</a></h2>

<table class="container">
	<thead>
		<tr>
			<th><h1>id</h1></th>
			<th><h1>Name</h1></th>
			<th><h1>Price</h1></th>
			<th><h1>is Veg</h1></th>
		</tr>
	</thead>
	<tbody>
        <?php 
            $que = "SELECT * FROM food";
            $res = mysqli_query($conn,$que);
            while($row = mysqli_fetch_assoc($res)) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['isveg']; ?></td>
            </tr>
        <?php } ?>
	</tbody>
</table>
</body>
</html>