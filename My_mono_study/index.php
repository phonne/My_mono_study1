<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <link href="css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
    <link rel="icon" type="image/png" href="img/monologo.png" />
    <script type="text/javascript" src="js/bootstrap.fix.js"></script>
    <title>Login</title>
</head>



<body>
<div>
    <?php include("mono_header.php"); ?>
</div>
<div class="container-fluid">


    <div class="row-fluid">

        <div class="col-xs-6 span3">
            <div>

                <html><head></head><body><br>
                <section>
                    <div class="hex" style="width: 18vw; height: 10vw; font-size: 19px; background-color: rgb(49, 210, 139); color: rgb(55, 255, 147); line-height: 10vw; text-align: center; will-change: background-color;"><img src="img/mono_test_logo.png" width="387" height="160"></div>
                </section>
                <script src="js/anime.js"></script>
                <script>
                    var hex = anime({
                        targets: '.hex',
                        backgroundColor: '#319BFF',
                        duration: 3000,
                        loop: true,
                        direction: 'alternate',
                        easing: 'easeOutQuad'
                    });
                </script>
                <!--            在这里增加一个判断，如果已经登录就显示用户信息，尚未登录就是下面的那样-->
                <form action="includes/loginverify.php" method="post">
                    <div class="control-group">
                        <label class="control-label" for="username">Username</label>
                        <div class="controls">
                            <input id="username" type="text" name="uid" placeholder="Username">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                            <input id="inputPassword" type="password" name="pwd" placeholder="Password"><br>
                            <!--                        我在这里插入了登录的验证-->
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <!--                        cookie还不会做……不过好想浏览器会自动保存填写过的信息也-->
                            <label class="checkbox"><input type="checkbox">Remember me</label><button class="btn" type="submit">Login</button>
                        </div>
                    </div>
                </form>
                <a data-toggle="modal" data-target="#myModal2">
                    Forgot password?
                </a>
                <!-- （Modal） -->
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                </button>
                            </div>
                            <div class="modal-body">
                                <!--                            发送验证邮箱的功能还没有写，不过打算用phpmail来发邮件-->
                                <form action="includes/sendemail.php" method="post">
                                    Please enter your email address
                                    <input type="text" name="email" placeholder="Email"><br>
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="forgotPass" value="Request Password">Send message</button> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>
                <br><br>
                <p>Not registered yet? Sign up now!</p>
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Sign up
                </button>
                <!-- （Modal） -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="includes/signup.php" method="POST">
                                    <input type="text" name="uid" placeholder="Username"><br>
                                    <input type="text" name="email" placeholder="Email"><br>
                                    <input type="password" name="pwd" placeholder="Password"><br>
                                    <input type="password" name="pwd2" placeholder="Confirm Password"><br>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
                                    <button type="submit" class="btn btn-primary">Sign up</button>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>
                <br>
                <br></body></html>
            </div>
        </div>

<!--        middle information:news-->
        <?php
        include 'Mono_news.php';
        ?>
        </div>
    </div>
</div>

<?php
//$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//if (strpos($url,'error=empty') !==false){
//}
//else if (strpos($url,'error=username') !==false){
//   echo "Username already exists!";
//}
//else if (strpos($url,'error=notsame') !==false){
//   echo "You have entered different password !";
//}


?>

</body>

</html>
