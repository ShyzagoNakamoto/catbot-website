<?php
session_start();
include "catDatabase.php";

if (
    isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['repeatPassword'])
) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $repeatPassword = validate($_POST['repeatPassword']);

    $user_data = 'username=' . $username . '&email=' . $email;


    if (empty($username)) {
        header("Location: ../register/index.php?error=User Name is required&$user_data");
        exit();
    } else if (empty($email)) {
        header("Location: ../register/index.php?error=Name is required&$user_data");
        exit();
    } else if (empty($password)) {
        header("Location: ../register/index.php?error=Password is required&$user_data");
        exit();
    } else if (empty($repeatPassword)) {
        header("Location: ../register/index.php?error=Re Password is required&$user_data");
        exit();
    } else if ($password !== $repeatPassword) {
        header("Location: ../register/index.php?error=The confirmation password  does not match&$user_data");
        exit();
    } else {
        $password = md5($password);
        $sql = "SELECT * FROM catUsers WHERE cat_username='$username' ";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: ../register/index.php?error=The username is taken try another&$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO catUsers(cat_username, cat_useremail, cat_userpassword) VALUES('$username', '$email', '$password')";
            $result2 = mysqli_query($connect, $sql2);
            if ($result2) {
                header("Location: ../profile");
                exit();
            } else {
                header("Location: ../register/index.php?error=unknown error occurred&$user_data");
                exit();
            }
        }
    }
} else {
    header("Location: ../");
    exit();
}