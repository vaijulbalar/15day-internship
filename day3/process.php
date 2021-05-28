<?php

// $a = $_GET["txt1"];
// $b = $_GET["txt2"];

// echo "your name is $a and your age is $b";

// $a = $_POST["txt1"];
// $b = $_POST["txt2"];

// echo "your name is $a and your age is $b";

// $a = $_REQUEST["txt1"];
// $b = $_REQUEST["txt2"];
// echo "your name is $a and your age is $b";

$a = "$_POST[txt1]";
$b = "$_POST[sub1]";
$c = "$_POST[sub2]";
$d = "$_POST[sub3]";
$e = "$_POST[sub4]";
$f = "$_POST[sub5]";

echo "<b>your marks is:</b><br>";

echo "<br><b>Maths</b>: $b";
echo "<br><b>Chemistry</b>: $c";
echo "<br><b>Physics</b>: $d";
echo "<br><b>English</b>: $e";
echo "<br><b>Computer</b>: $f";

$sum= $b + $c + $d + $e + $f;
$p=$sum/5;
echo "<br>your total is $sum<br>";
echo "<br>your percentage is $p";

if($p>80){
    echo "<br><font color=green>EXCELENT</font>";
}
elseif($p>65){
    echo"<br><font color=yellow>GOOD</font>";
}
elseif($p>45){
    echo"<br><font color=RED>YOU NEED TO IMPROVE</font>";
}


