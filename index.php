<?php
print("HW16");

$ble = false;
$ble = getenv("COMPUTERNAME");

if(!$ble)
{
    print("Environment variable not present\n");
}
else
{
    print("$ble\n");
}




?>
