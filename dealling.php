<?php
if ($_POST['session']==NULL)
    header("Location: index.php");
try{$link=mysql_connect("localhost","root","");
    mysql_select_db("lgd2015", $link);
    $session=$_POST['session'];
    $info=$_POST['info'];
    $q = "update users set info = '$info' WHERE idnumber like '$session'";
    mysql_query("SET NAMES GB2312");
    mysql_query($q, $link);
    mysql_free_result($q);
    $url='http://'.$_SERVER['SERVER_NAME'].'/profile.php?session='.$session;
    header("Location: $url");
}
catch (Exception $session){ }
?>