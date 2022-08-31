<?php 
    $db='pbl';
    $user='root';
    $pass='';
    $serv='localhost';
    $id=$_POST['username'];
    $pwd=$_POST['pass'];

$con = new mysqli($serv,$user,$pass,$db);
if($con->connect_error){
    die ('error');
}
$qry="SELECT * FROM reg WHERE id='$id' AND pass='$pass'";
if($con->query($qry)==TRUE){
    echo 'logged in';
    exit();
}
else{
    echo 'er';
}
$con->close();
?>
