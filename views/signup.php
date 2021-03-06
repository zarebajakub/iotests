<?php
    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }
    $doc_root = $_SESSION['ROOT'];

    require_once $doc_root.'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="<?=$SUB_FOLDER."/common/register.php"?>" method="post">
					<span class="login100-form-title">
					Sign up<br>
										<br>
                    </span>

                <span><?php
                    if(isset($_SESSION['lastPageData'][0]))
                    {
                        echo $_SESSION['lastPageData'][0];
                    }
                    ?>
                </span>

                <div class="select-div ">
                    <label class="select-label p-b-20">Choose your role:</label>

                    <select name="user-type" class="rule p-b-300">
                        <option value="client">client</option>
                        <option value="project-manager">project manager</option>
                        <option value="employee">employee</option>
                    </select>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100 signUp" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass-repeat">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Enter password one more time</span>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign up
                    </button>
                    <span class="login100UserHasAccount p-t-23">
					Already have an account?<a class="link" href="login.php"><br>
												   Log in</a> <br>
					<br>
                    </span>
                </div>


            </form>

            <div class="login100-more" style="background-image: url('../images/img-01.jpg');">
                <div class="Get_oRganised_organised">
                    <span>Get </span><span
                        style="font-size:42px;text-decoration:line-through;vertical-align:sub;">o</span><span
                        style="font-size:42px;text-decoration:line-through;">R</span><span
                        style="font-family:Calibri;font-size:42px;text-decoration:line-through;">g</span><span
                        style="font-style:normal;font-weight:normal;font-size:42px;text-decoration:line-through;">a</span><span
                        style="font-size:42px;text-decoration:line-through;">n</span><span
                        style="font-family:Arial;font-size:42px;text-decoration:line-through;">i</span><span
                        style="font-size:42px;text-decoration:line-through;">s</span><span
                        style="font-size:42px;text-decoration:line-through;text-transform:capitalize;">e</span><span
                        style="font-family:Palatino Linotype;font-size:42px;text-decoration:line-through;">d</span><span
                        style="font-family:Palatino Linotype;font-size:42px;"> </span><span style="font-size:42px;">organised</span>
                </div>

            </div>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/bootstrap/js/popper.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/daterangepicker/moment.min.js"></script>
<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="../js/main.js"></script>

</body>
</html>