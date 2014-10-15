<?php
session_start();
if(!session_is_registered(myusername)) {
	header("location:mainlogin.php");
}

?>

<html>
<head><title> Welcome </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style></head>
<body>
<h1>&nbsp; </h1>
<h1>Login Successful!</h1>
<?php 



?>


<p>

<a href="logout.php"> Log Out!</a></p>



</body>
</html>