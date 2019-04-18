<!DOCTYPE html>
<html>
<head>
	<title>webnotes</title>
</head>
<body style="font-family: sans-serif;">
<h2 style="color: #333;">Hi there! This is action page.</h2>
<?php extract($_POST);
		extract($_GET); 
		echo "Full Name: ".$FirstName." ".$LastName;
 ?>
<p><b>NOTE</b>: How to pass data between pages through form will not be explained in this section.</p>
</body>
</html>