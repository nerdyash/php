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
</body>
</html>