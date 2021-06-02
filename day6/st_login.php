<?php
$connection = mysqli_connect("localhost","root","","db_internship");

if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $dob = $_POST['txt3'];
    $email = $_POST['txt4'];
    $mobile = $_POST['txt5'];
    $add  = $_POST['txt6'];
    $pwd = $_POST['txt7'];
    $area = $_POST['txt8'];
    $pincode = $_POST['txt9'];

    $q = mysqli_query($connection,"insert into tbl_student(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_password,st_area,st_pincode)
                        values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$add}','{$pwd}','{$area}','{$pincode}')")
                        or die(mysqli_error($connection));

            if($q){
                echo "<script> alert ('record added successfully');</script>";
            }
}

?>

<html>
    <body>
        <form method = "post">
            Name:    <input type = "text" name = "txt1"/><br><br>
            Gender:  <select name="txt2">
                       <option>Male</option>
                       <option>Female</option>
                     </select><br><br>
             Date Of Birth:  <input type = "date" name="txt3"/><br><br>
             Email:  <input type = "email" name = "txt4"/><br><br>
             mobile: <input type = "number" name = "txt5"/><br><br>
             Address: <textarea name = "txt6" cols="50" rows="3"></textarea><br><br>
             password: <input type = "password" name = "txt7"/><br><br>
             area:      <select name = "txt8">
                            <option>nana varachha</option>
                            <option>mota varachha</option>
                            <option>katargam</option>
                            <option>variav</option>
                            <option>hirabug</option>
                        </select><br><br>
             pincode: <input type = "number" name = "txt9"/><br><br>
                       <input type = "submit"/>
        </form>
    </body>
</html>