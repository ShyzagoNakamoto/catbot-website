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

    if (empty($username) || empty($email) || empty($password) || empty($repeatPassword)) {
        header("Location: ../register/index.php?error=Cannot Be Empty");
        exit();
    } else if ($password !== $repeatPassword) {
        header("Location: ../register/index.php?error=The Confirmation Password Does Not Match");
        exit();
    } else {
        $sql = "SELECT * FROM catUsers WHERE cat_username='$username' ";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: ../register/index.php?error=Username Already Taken");
            exit();
        } else {
            $sql2 = "INSERT INTO catUsers(cat_username, cat_useremail, cat_userpassword) VALUES('$username', '$email', '$password')";
            $result2 = mysqli_query($connect, $sql2);
            if ($result2) {
                header("Location: ../profile");
                exit();
            } else {
                header("Location: ../register/index.php?error=Unknown Error Occurred");
                exit();
            }
        }
    }
} else {
    header("Location: ../");
    exit();
}
