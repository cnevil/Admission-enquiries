<?php
session_start();
if (!isset($_SESSION['id']))
    header("Location: index.php");
    include "inc/config.php";
    $id=$_SESSION['id'];
    $info=intval($_POST['info']);
    if ($info ==2147483647) $info=0;
    $q = "update users set info = '$info' WHERE idnumber like '$id'";
    mysql_query("SET NAMES GB2312");
    @mysql_query($q);
    mysql_free_result($q);
    $url='http://'.$_SERVER['SERVER_NAME'].'/profile.php';
    header("Location: $url");
?>