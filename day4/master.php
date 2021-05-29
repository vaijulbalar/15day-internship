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
     <form action="process.php" method="post">
        <table>
            <tr>
                <td>NAME</td>
                <td><input type="text" name="txt1" required/></td>
            </tr>

            <tr>
                <td>AGE</td>
                <td><input type="number" name="txt2" min="1" max="100" required/></td>
            </tr>

            <tr>
                <td>EMAIL</td>
                <td><input type="email" name="txt3" /></td>
            </tr>

            <tr>
                <td>GENDER</td>
                <td><input type="radio" name="txt4">male</input></td>
                <td><input type="radio" name="txt4">female</input></td>
            </tr>

            <tr>
                <td>PHONE</td>
                <td><input type="text" name="txt5" required/></td>
            </tr>

            <tr>
                <td>ADDRESS</td>
                <td><textarea name="txt6" rows="4"></textarea></td>
            </tr>

            
            

            <tr>
                <td><input type="submit"/></td>
                <td><input type="reset"/></td>
              
            </tr>
        </table>
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
