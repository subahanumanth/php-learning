<?php
$name=$_REQUEST['name'];
echo $name;

?>




<html>


<form action="request.php" method="POST">
Enter name : <input type="text" name="name"><br><br>
<input type="submit" name="submit">
</form>

</html>
