<?php
echo checkdate(3,4,2003);
echo date("d-m-y");
echo time();
$date1 = date_create("13-09-2002");
$date2 = date_create("13-08-2010");
$diff = date_diff($date1,$date2);
echo $diff->format(" %a");
$a = strtotime("now");
echo date("y-m-d",$a);
