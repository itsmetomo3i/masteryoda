<?php
echo 'hello php!!';
echo "\n";
    $a = 3;
    $b = 7;
echo $a+$b;
echo "\n";

    $array_month = ["January","February","March","April","May","June","August","September","October","November","December"];
echo $array_month [6];
echo "\n";

    $array_birthyear =["1988","1989","2020"];
    $array_birthdate =['29','30','31'];
echo $array_birthyear[0]. $array_birthdate[1]. "th". $array_month[8]; 
echo "\n";

    $hello = "HELLO";
    $name = "Tomomi";
echo $hello.$name;
echo "\n";
//Laravel 3 If/Else/Else if clause
$height = 210;
//below, if $height was below 145 run {}
if ($height < 145) {
    echo "145cm Miman ha gojyosya dekimasen.";
} // BELOW includes else if
 else if ($height >= 200){
    echo "200cm Ijyou no hito ha gojyosya dekimasen.";
} else {
    echo "Gojyosya ni naremasu.";
}
echo "\n";
//Switch ???
$weekday = "Sunday";
switch ($weekday){
    case "Monday": 
    //Breakいれない時はCaseが続けて実行される 
    case "Tuesday":
        echo "Trush day --Burnables!";
        break;
    case "Wednesday": 
    case "Saturday": 
        echo "Trush --Recycling day";
        break;
    default: echo "No Trush!Have a Great day.";
        break;
}
echo "\n";
$a = 3;
$b = 3;
$c = "3";
var_dump($a == $b);
