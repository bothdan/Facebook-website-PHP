<?php
$id = $row['id'];
$membru = $row['user'];
$first = $row['first'];
$last = $row['last'];
$dob = $row['dob'];
$dob = date('F j, Y', strtotime($dob));
$sex = $row['sex'];
$hometown = $row['hometown'];
$relationship = $row['relationship'];
$aniversary = $row['aniversary'];
$aniversary = date('F j, Y', strtotime($aniversary));
$look_for = $row['look_for'];
$email = $row['email'];
$college = $row['college'];
$highschool = $row['highschool'];
$married_to_id = $row['married_to_id'];
?>