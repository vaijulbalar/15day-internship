<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>vaijul balar</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
   <?php
     include './theme/menu.php';
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
<div id="header-wrapper">
	<div id="header">
		
	<div id="logo">
			<h1><a href="#">vaijul balar</a></h1>
			<p>Template design by me</p>
		</div>
			
		
	</div>
</div>
<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/IMG_20180629_003602.jpg" width="920" height="400" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to my page </a></h2>
				<ul class="title"><li>you need to first rigester</li></ul>
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
				</div>
				
				</div>
			</div>
			<div class="post">
				
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php
		include './theme/sidebar.php'
		?>
		
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>2021.  managed by vaijul balar.</p>
</div>
<!-- end #footer -->
</body>
</html>
