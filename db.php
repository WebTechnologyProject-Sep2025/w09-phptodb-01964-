<?php
$cn = mysqli_connect('127.0.0.1','root','','exhibition_db');
if (!$cn) { die(mysqli_connect_error()); }
mysqli_set_charset($cn,'utf8mb4');

/* sanity check here */
var_dump(mysqli_ping($cn));  // expect: bool(true)
exit;