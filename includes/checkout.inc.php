<?php
    if(isset($_POST['signup-submit'])) {
        require 'dbh.inc.php' ;
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zipcode = $_POST['zipcode'];
        $cardname = $_POST['cardname'];
        $cardnumber = $_POST['cardnumber'];
        $expirationmonth = $_POST['expirationmonth'];
        $expirationyear = $_POST['expirationyear'];
        $cvv = $_POST['cvv'];

        if(empty($name) || empty($email) || empty($address) || empty($city) || empty($state) || empty($zipcode) || empty($cardname) || empty($cardnumber)|| empty($expirationmonth)|| empty($expirationyear)|| empty($cvv)) {
            header("Location: ../signup.php?error=emptyfields");
            exit();
        }
        else {
            $sql = "INSERT INTO order (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../signup.php?error=sqlerror");
                        exit();
                    }
                    else {
                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../signup.php?signup=success");
                        exit();
                    }
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

    }
    else {
        header("Location: ../signup.php");
        exit();
    }
