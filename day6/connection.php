<?php
$host = "localhost";
$username ="root";
$passwd = "";
$dbname = "db_internship";
$connection = mysqli_connect($host,$username,$passwd,$dbname);

$q = mysqli_query($connection,
"insert into tbl_user(user_name,user_gender,user_mobile)
            values('shalin','male','8546325878')")
            or die(mysqli_error($connection));

    if($q){
        echo "<script>alert('record is added');</script>";
    }

?>
    
