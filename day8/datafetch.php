<?php
 $connection = mysqli_connect("localhost","root","","db_internship");

 $q = mysqli_query($connection,"select * from tbl_user where is_delete=0") 
                    or die(mysqli_error($connection));

                    
    
    echo "<table border = 1>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>name</th>";
    echo "<th>gender</th>";
    echo "<th>mobile</th>";
    echo "<th>action</th>";
    echo "</tr>";
    $i=0;
    while($data=mysqli_fetch_array($q)) {
       $i++;
        echo "<tr>";
           echo "<td> $i </td>";
           echo "<td> {$data['user_name']}</td>";
           echo "<td> {$data['user_gender']} </td>";
           echo "<td> {$data['user_mobile']} </td>";
           echo "<td> <a href ='edit.php?editid={$data['user_id']}'>Edit</a> | <a href = 'delete.php?deleteid={$data['user_id']}'>delete</a></td>";
           echo "</tr>";
    }
    echo "</table>";

    echo "<a href='form.php'>add record</a>";
?>