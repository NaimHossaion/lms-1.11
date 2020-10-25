<?php
$Ref_ID = date('Ymdhis');
$Ref_ID2 = date('mdhis');
echo $Ref_ID; echo '<br>';
echo "hello"; echo '<br>';
echo $Ref_ID2; echo '<br>';

?>

<?php

// Declaring a variable to hold the IP
// address getHostName() gets the name
// of the local machine getHostByName()
// gets the corresponding IP
$localIP = getHostByName(getHostName());

// Displaying the address
echo $localIP;

?>

<?php
echo getHostByName(php_uname('n'));
?>
<br>
<button class="btn" onclick="document.location='index.php'">Cancel</button>