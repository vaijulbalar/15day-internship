<?php
  
  //leap year
  $year=2016;
  if($year%4==0){
      echo "$year is a leap year";
  }
  else {
      echo "$year is not a leap year";
  }
 
  //even or odd

  $a=33;
  if($a%2==0){
      echo "$a is a even No";
  }
  else{
      echo "$a is a odd No";
  }

  //pelindrome
  $a=324;
  $p=$a;
  $rev=0;
  while($a>0){
      $s=$a%10;
      $rev=($rev*10)+$s;
      $a=(int)($a/10);
  }
  
  if($rev==$p){
      echo "<br>given no is pelindrome";
  }
  else{
      echo "<br>given no is not a pelindrome";
  }
  ?>