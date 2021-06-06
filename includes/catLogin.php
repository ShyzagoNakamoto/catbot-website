<?php
session_start();
include "catDatabase.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username) || empty($password)) {
        header("Location:  ../login/index.php?error=Username or Password is Required");
        exit();
    } else {
        $sql = "SELECT * FROM catUsers WHERE cat_username='$username' AND cat_userpassword='$password'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['cat_username'] === $username && $row['cat_userpassword'] === $password) {
                $_SESSION['cat_username'] = $row['cat_username'];
                $_SESSION['cat_userid'] = $row['cat_userid'];
                header("Location: ../profile");
                exit();
            } else {
                header("Location: ../login/index.php?error=Incorrect Username or Password");
                exit();
            }
        } else {
            header("Location: ../login/index.php?error=Incorrect Username or Password");
            exit();
        }
    }
} else {
    header("Location: ../");
    exit();
}