<?php

include '../db/dbh.php';

$uid = $_POST['uid'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];
//$admin = $_POST['admin'];

//TODO additional checks for the htpasswd file for example no ":" in username or password

//check password miss match
if ($pwd !== $pwd2) {
    header("Location: ../index.php?error=notsame");
    exit();
}
//check username
if (empty($uid)){
    header("Location: ../index.php?error=userempty");
    exit();
}

//check email
if (empty($email)){
    header("Location: ../index.php?error=emailempty");
    exit();
}


//check passwd
if (empty($pwd)){
    header("Location: ../index.php?error=passwordempty");
    exit();
}

else {

    $sql = "SELECT uid FROM users WHERE uid='$uid'";
    $result = mysqli_query($conn, $sql);
    $uidcheck = mysqli_num_rows($result);

    $sql1 = "SELECT uid FROM users WHERE email='$email'";
    $result1 = mysqli_query($conn, $sql1);
    $emailcheck = mysqli_num_rows($result1);


    //check if name is taken
    if($uidcheck > 0){
        header("Location: ../index.php?error=username");
        exit();

    }

    //check if email is taken
    if($emailcheck > 0) {
        header("Location: ../index.php?error=emailexist");
        exit();
    }


    else{
        $sql = "INSERT INTO users ( uid, email, pwd, admin, vid) VALUES ( '$uid','$email', '$hash', '0', $vid)";

        $result = mysqli_query($conn, $sql);

        header("Location: ../index.php?success");
    }
}

?>
