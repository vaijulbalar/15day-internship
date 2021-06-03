<?php

$connection = mysqli_connect("localhost","root","","db_internship");

$editid = $_GET['editid'];

$editq=mysqli_query($connection,"select * from tbl_user where user_id='{$editid}'")
                    or die(mysqli_error($connection));
$editdata=mysqli_fetch_array($editq);
 if($_POST){
     $ename=$_POST['txt1'];
     $egender=$_POST['txt2'];
     $emobile=$_POST['txt3'];

     $uq=mysqli_query($connection,"update tbl_user set user_name='{$ename}',user_gender='{$egender}',user_mobile='{$emobile}' where user_id='{$editid}'")

                        or die(mysqli_error($connection));

            if($uq){
               echo " <script> alert('record updated'); window.location='datafetch.php'; </script>";
            }
                      
 }




?>
<html>
    <body>
        <form method ="post">
         
         Name:   <input type = "text" value="<?php echo $editdata['user_name'];?>" name="txt1"/>
         Gender: <input type="radio"  <?php if($editdata['user_gender']=="Male") { echo "checked";}?>value="Male" name="txt2" >Male</input>
                 <input type="radio"  <?php if($editdata['user_gender']=="Female") { echo "checked";}?>value="Female" name="txt2" >Female</input>
                 
        mobile :  <input type = "number" value= "<?php echo $editdata['user_mobile'];?>" name="txt3"/>
                   <input type = "submit"/>
        </form>
        <a href = 'datafetch.php'>display record</a>
    </body>
</html>
