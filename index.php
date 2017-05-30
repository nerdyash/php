<!DOCTYPE html>
<html>
<head>
    <title>My PHP Prac</title>
</head>
<body>
<h1>PHP</h1>
<br>

<!--simple print with echo statement-->

<?php

$name = "Yash Thakkar";

echo "My name is ". $name . ".<br>";

?>

<?php

//define object and its property

    class Age{
        function Age(){
            $this->age = 23;
        }

    }

#create an object

$myAge = new Age();

#print the object property

echo "My age is " . $myAge->age . ".<br>";

?>

<!--Using date function-->
<?php

$time_hour = date("H");

echo "<p>Time is " .$time_hour."</p>";

if($time_hour < 10){
    echo "Good Morning!<br>";
}else if($time_hour >= 10 && $time_hour < 20 ){
    echo "Have a good day!<br>";
}else{
    echo "Good night<br>";
}

?>

<!--Switch case-->
<?php
    $fav_sport = "cricket";

    switch ($fav_sport){
        case "tennis":
            echo "My favorite sport is " . $fav_sport . ".<br>";
            break;
        case "cricket":
            echo "My favorite sport is " . $fav_sport . ".<br>";
            break;
        default:
            echo "I do not like sports.<br>";
    }
?>

<!--while loop-->
<?php

    $x = 1;
    echo "Print odd numbers:<br>";
    while($x <= 10){
        //print odd numbers
        if($x % 2 != 0){
            echo $x ."<br>";
        }
        $x++;
    }

?>

<!--do while loop-->
<?php
    $x = 1;
    echo "Print even numbers<br>";
    do{
        if($x % 2 == 0){
            echo $x . "<br>";
        }
        $x ++;
    }while($x <= 10);
?>

<!--Multiplication of two number using function-->
<?php

    echo "Multiplication of two numbers<br>";
    function multiplication($x, $y){
        echo $x . " * " . $y . " = " .($x*$y) . "<br>";
    }

    multiplication(5, 4);
    multiplication(14,13);

?>

<!--Arrays-->
<?php

    $num = [1, 2, 3, 4];
    $sum = 0;
    for($x = 0; $x < count($num); $x++){
        $sum = $sum + $num[$x];
    }
    echo "The sum of array is ". $sum . ".<br>" ;

?>

<!--Hashmap or associative array in php-->
<?php

    $age = ["yash" => 23, "dhruv" => 20];
    foreach($age as $x => $value){
        echo "Age of " .$x. " is " .$value . ".<br>";
    }

?>

<!--Sorting in php-->
<?php

    $arr = [2, 3, 1, 5, 4];
    $arr_1 = ["Yash" => 23, "Dhruv" => 20];

    echo "Array => ";
    for($x = 0; $x < count($arr); $x++){
        echo $arr[$x] . " ";
    }
    echo "<br>";

    sort($arr);

    echo "Sorting array => ";
    for($x = 0; $x < count($arr); $x++){
        echo $arr[$x] . " ";
    }
    echo "<br>";

    rsort($arr);

    echo "Reverse sorting => ";
    for($x = 0; $x < count($arr); $x++){
        echo $arr[$x] . " ";
    }
    echo "<br><br>";

    echo "Key Value array : <br>";
    foreach ($arr_1 as $key => $value){
        echo $key . " => " . $value ."<br>";
    }

    asort($arr_1);
    echo "ascending sort by value : <br>";
    foreach ($arr_1 as $key => $value){
        echo $key . " => " . $value ."<br>";
    }

    arsort($arr_1);
    echo "descending sort by value : <br>";
    foreach ($arr_1 as $key => $value){
        echo $key . " => " . $value ."<br>";
    }

    ksort($arr_1);
    echo "ascending sort by Key : <br>";
    foreach ($arr_1 as $key => $value){
        echo $key . " => " . $value ."<br>";
    }

    krsort($arr_1);
    echo "descending sort by Key : <br>";
    foreach ($arr_1 as $key => $value){
        echo $key . " => " . $value ."<br>";
    }

?>
</body>
</html>