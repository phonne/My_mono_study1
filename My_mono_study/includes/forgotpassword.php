<?php
    session_start();
    include '../db/dbh.php';
    $uid = $_POST['uid'];
    $sql = "SELECT * FROM users WHERE uid = '$uid'";
    $result = mysqli_query($conn, $sql);

        if(!$row = mysqli_fetch_assoc($result)){
            echo "Please check your inputs!";
        } else{
         $str = "0123456789qwertyuioplkjhgfdsazxcvbnm";
         $str = str_shuffle($str);
         $str = substr($str, 0, 10);
         echo $str;}

?>


<html>
    <body>
    <form action="forgotpassword.php" method="post">
        <input type="text" name="uid" placeholder="Email"><br>
        <input type="submit" name="forgotPass" value="Request Password" />

    </form>
    </body>
</html>