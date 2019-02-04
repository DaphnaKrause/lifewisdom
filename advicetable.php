<?php
	include 'database.php';
	$query = "SELECT * FROM lifewisdom ORDER BY id";
	$lifeadvice = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Life Advice Table</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="style/main.css">
</head>
<body>

  <div class="mt-5 p-4 col-form-label-lg mx-auto" style="width: 1000px;">

    <h1>Life Advice</h1>

    <p><a href="enter_advice.php">Add Your Own Life Advice</a></p>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th id="name" scope="col">Name</th>
				<th id="profession" scope="col">Profession</th>
        <th id="hometown" scope="col">Hometown</th>
        <th id="wisdom" scope="col">Wisdom</th>
      </tr>
    </thead>


    <?php while ($row = mysqli_fetch_assoc($lifeadvice)) :  ?>

    <tr>
      <td><?php echo stripslashes($row['name']); ?></td>
			 <td><?php echo $row['profession']; ?></td>
      <td><?php echo $row['hometown']; ?></td>
      <td><?php echo $row['wisdom']; ?></td>
    </tr>

    <?php endwhile;  ?>
</table>

</div>
</body>
</html>
