<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body><h1>formSubmit.php</h1>
<?php
	//this is a comment
	print"Hello World";
	//printing everything that was in form
	print_r($_POST);
	print"<hr>";
	$name=$_POST['name'];
	$email=$_POST['email'];
	//accesing just the name from $_post
	print $_POST["name"];
	?>
	<h3>Name:
	<?php
	//$name= "Hello ";
//		print $name;
//		$name= " Amy";
//			print $name;
	print $_POST["name"];
	?>
	</h3>
	<h3>Email:<?php print$email;?></h3></h3>
</body>
</html>

