<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
    <style>
        .err{
            color: darkred;
        }
    </style>
</head>
<body>
    <h1>Php Form</h1>
    <?php

        $name = $email = $gender = $website = $comment = "";
        $name_err = $email_err = $gender_err = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST["name"])){
                $name_err = "Name is required.";
            }else {
                $name = test_data($_POST['name']);
                if(!preg_match("/^[a-zA-Z]*$/", $name)){
                    $name_err = "only Characters and whitespace allowed";
                }
            }
            if(empty($_POST['email'])){
                $email_err = "Email is required.";
            }else {
                $email = test_data($_POST['email']);
            }
            $website = test_data($_POST['website']);
            $comment = test_data($_POST['comment']);
            if(empty($_POST['gender'])){
                $gender_err = "Gender is required.";
            }else {
                $gender = test_data($_POST['gender']);
            }
        }

        function test_data($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <label>Name : </label>
        <input type="text" name="name">
        <span class="err">* <?php echo $name_err; ?></span>
        <br><br>
        <label>Email : </label>
        <input type="email" name="email">
        <span class="err">* <?php echo $email_err; ?></span>
        <br><br>
        <label>Website: </label>
        <input type="url" name="website"><br><br>
        <label>Comment : </label><br>
        <textarea name="comment" cols="10" rows="5"></textarea><br><br>
        <label>Gender</label>
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Male">Male
        <span class="err">* <?php echo $gender_err; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if(isset($_POST['submit']) && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["gender"])) {
            echo "<br><br>Thank you for contacting " . $name;
//            echo "Name : " . $name . "<br>";
//            echo "Email : " . $email . "<br>";
//            echo "website : " . $website . "<br>";
//            echo "Comment : " . $comment . "<br>";
//            if (isset($_POST['gender'])) {
//                echo "Gender : " . $_POST['gender'] . "<br>";
//            }
        }
    ?>
</body>
</html>