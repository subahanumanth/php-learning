<?php

$web = "google chrome";
$search = "tim &tom";
$result = "http://".rawurlencode($web)."search?".urlencode($search);
echo $result;

?>
