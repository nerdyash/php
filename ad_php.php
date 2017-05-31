<!DOCTYPE html>
<html>
<head>
    <title>Advanced PHP</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <lable>Select your <?php echo date('Y'); ?> birth date to check remaining time : </lable><br>
    <input type="date" name="date" required><br>
    <input type="submit" name="submit" value="Submit"><br><br>
</form>

<!--Date and time-->
<?php
    if(isset($_POST["submit"])) {
        $startDate = strtotime($_POST['date']);
        //$startDate = $startDate->format('m/d/Y');

        $day = ceil(($startDate - time()) / 60 / 60 / 24);
        $hours = ceil(($startDate - time()) / 60 / 60);
        $min = ceil(($startDate - time()) / 60);
        $sec = ceil(($startDate - time()));

        echo "Your birthdate is " . date('m/d/Y', $startDate) . " and the day is " . date('l', $startDate) . " of this year.<br> ";
        echo "Total Days remaining till your birthday is " . $day . "<br>";
        echo "Total Hours remaining till your birthday is " . $hours . "<br>";
        echo "Total Minutes remaining till your birthday is " . $min . "<br>";
        echo "Total Seconds remaining till your birthday is " . $sec . "<br>";

    }
?>
</body>
</html>