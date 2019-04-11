<?php
	session_start();
?>
<html>
<form action="text1.php" method="post">
USERNAME<input type="text" name="uname">
<select name="course">
  <option value="PYTHON" name="python">PYTHON</option>
  <option value="PHP" name="php">PHP</option>
  </select><br>
<input type="submit" name="submit" value="submit">
</form>
</html>