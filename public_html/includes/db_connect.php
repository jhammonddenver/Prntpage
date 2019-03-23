<?php

$accountDBServerName = "localhost";
$accountDBUserName = "";
$accountDBPassword = "";
$accountDBName = "";

$conn = mysqli_connect($accountDBServerName,$accountDBUserName, $accountDBPassword, $accountDBName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
