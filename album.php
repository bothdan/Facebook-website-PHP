<style type="text/css">
a:link {
	text-decoration: none;
	color: #000;
}
a:visited {
	text-decoration: none;
	color: #000;
}
a:hover {
	text-decoration: underline;
	color: #000;
}
a:active {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color: #000;
}
</style>


<?php
include ('header.php');
include('phpconect.php');
?>
<body>

<?php
$user_id = $_REQUEST['UID'];
?>
My Albums user id: <?php echo $user_id ;?><p>
<?php $album = mysql_query("SELECT * FROM albums WHERE userid='$user_id'") ;?>
<table  cellpadding="1" widith="700">
	<td>
		
		<table border = "1" width="100%">
		<td border ="1">
	<?php
	
		while ($row3 = mysql_fetch_assoc($album)) { 
	?>
    
	    <a href="viewalbum.php?UID=<?php echo $user_id ;?>&album=<?php echo $row3['name'] ;?>">
        <img src="poze/<?php echo $row3['cover'] ;?>" width="97"  alt="<?php echo $row3['name'] ;?>" border="0" ></a><br>
				
			
                
				<b><a href="viewalbum.php?UID=<?php echo $user_id ;?>&album=<?php echo $row3['name'] ; ?>"><?php echo $row3['name'] ;?></a></b><br>
				
				<?php echo $row3['description'] ;?><br>
				<?php echo $row3['count'] ;?> items<br>
				
                <font face="arial" size="2">
				<a href="deletealbum.php?UID=<?php echo $user_id ;?>&album=<?php echo $row3['name'] ;?>">Delete</a></font><br>
				
			</td>
			
		
		
		</table>
		<?php } ; ?>
		</td>
        <br><br>
		
		
		<font face="arial" size="4">
		<a href="createalbum.php?UID=<?php echo $user_id ;?>">Create an album</a><br>
		</font>
		
	

</table>


</body>