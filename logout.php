<?php
session_start();
session_destroy();
ob_start();
?>

<head>

<title>Thanks!</title>
</head>

<body>

<?php
header("location:index.php");
?>
</body>
</html>