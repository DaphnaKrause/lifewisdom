<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Advice - Enter </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
</head>

<body>
<div id="container" class="mt-5 p-4 col-form-label-lg mx-auto" style="width: 600px;">

<h1>Advice Form: Add some wisdom</h1>

<p class="middle"><a href="advicetable.php">View full Database</a></p>

<div id="advice">

<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="adviceform" method="post" autocomplete="off" class="mt-5 p-4 col-form-label-lg mx-auto" style="width: 500px;">

  <div>
  <label for="Name">Name </label>
	<div><input type="text" name="name" id="name" maxlength="20" required></div>
  </div>

  <div>
  <label for="profession">Profession </label>
	<div><input type="text" name="profession" id="profession" maxlength="50" required></div>
  </div>

  <div>
  <label for="hometown">Hometown </label>
	<div><input type="text" name="hometown" id="hometown" max="20" required></div>
  </div>

  <div>
  <label for="wisdom">Wisdom</label>
	<div><input type="text" name="wisdom" id="wisdom" max="150" required></div>
 </div>

  <div class="p-2">
	<input type="submit" id="submit" value="Submit">
  </div>
</form>
<!-- close the form -->

</div> <!-- close #advice -->

<div id="response">
    <p class="announce">Thanks for submitting the form!</p>
    <p class="middle"><a href="enter_advice.php">Return to the form</a></p>
</div>

</div> <!-- close container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
<script src="js/enter.js"></script>
</body>
</html>
