<?php
session_start();
$_SESSION['uname']=$_POST['uname'];
$_SESSION['course']=$_POST['course'];

?>
<html>
<form action="confirm1.php" method="post">
EMAIL<input type="email" name="email"><br>
PHONE<input type="text" name="number"><br>
<input type="text">
<input type="submit" name="submit" value="ok">
</form>
</html>