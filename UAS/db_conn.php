<?php

$sname= "sql204.epizy.com";
$uname= "epiz_28817921";
$password = "FqTAZMfNAdnQ";

$db_name = "epiz_28817921_test_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
