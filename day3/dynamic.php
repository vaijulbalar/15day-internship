<?php
 echo "<table border=1 >";
 for($i=0;$i<10;$i++){
     if($i%2==0){
        echo "<tr  >";
        echo "<td bgcolor=red>$i</td>";
      echo "</tr>";}
      else{
          echo "<tr bgcolor=yellow>";
            echo "<td>$i</td>";
          echo "</tr>";      }
    
 }
 echo "</table>";
 ?>
