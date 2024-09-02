
<?php
fopen("new.php","w+");
fwrite("new.php","hello add this");
file_put_contents("new.php","hello how are you");
echo file_get_contents("new.php");

if(is_file("new.php")) {
	echo "yes";
}
else{
echo "no";
}
