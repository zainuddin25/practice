<?php

include 'connection.php';

$update=$db->exec("update daftar set nama='".$_POST['nama']."',Makanan='".$_POST['Makanan']."' where id=".$_POST['id']);

if($update)
{
    header("Location:index.php");
}


// var_dump($_POST);

?>