<?php
//  method-1
$a[0]=1;
$a[2]=2;
$a[3]=3;
$a[4]=4;
$a[5]='c';

// method-2
$a[]=1;
$a[]=2;
$a[]="v";
$a[]=2.50;
$a[]="true";

echo $a[2];

// method-3
$a = array(1,2,3.5,"vaijul","php","12");

echo "<br>".$a[3];

for($i=0;$i<count($a);$i++){
    echo "<br>".$a[$i];
}
$i=0;
while($i<count($a)){
   
    echo $a[$i];
    $i++;
}

echo "<pre>";
print_r($a);
echo"</pre>";

echo "<pre>";
var_dump($a);
echo "</pre>";
?>
