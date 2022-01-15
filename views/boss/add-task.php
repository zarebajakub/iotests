<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$doc_root = $_SESSION['ROOT'];

require_once $doc_root.'/dao/baseDao.php';

$employees = viewEmployes();
if(!isset($employees[0]) && is_array($employees) && !empty($employees))
{
    $employees = [$employees];
}
//print_r($employees);
//print_r($doc_root);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../../images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../css/util.css">
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <!--===============================================================================================-->
</head>
<body style="background-color: whitesmoke;">
<?php include('navbar.php'); ?>
<div class="limiter">


    <div class="container">
        <div class="addTask">
            <form class="login100-form validate-form" action="<?=$SUB_FOLDER?>/controllers/action-add-employee.php" method="post">
                <div class="BoxCenter">
                    <div class="labelBox">
                        <label class="bigLabel">Add task</label>
                        <label class="p-b-30 smallLabel">Enter details</label>
                    </div>
                    <div class="p-b-10">
                        <label>Chose the project</label>
                        <select name="rule" class="rule p-b-300">

                            <?php 
                                foreach($employees as $emp)
                                {
                                    //echo '<option value="'.$emp['user_id'].'">'.$emp['name']. " " . $emp['surname'].'</option>';
                                    echo 'tekst';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="p-b-10">
                        <label>Chose the employee</label>
                        <select name="rule" class="rule p-b-300">
                        <?php 
                                foreach($employees as $emp)
                                {
                                    echo '<option value="'.$emp['user_id'].'">'.$emp['name']. " " . $emp['surname'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="p-b-10">
                        <label>Enter the name</label>
                        <div class="wrap-input100 validate-input" data-validate="The name is required">
                            <input class="input100" type="text" name="taskName">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Task Name</span>
                        </div>
                    </div>
                    <div class="p-b-10">
                        <label>Enter the description</label>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="taskDescription">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Description</span>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Dodaj
                        </button>
                    </div>

                </div>
            </form>
        </div>

        <div class="pending">
            <div class="BoxCenter">
                <div class="labelBox">
                    <label class="bigLabel">Pending</label>
                    <label class="p-b-30 smallLabel">Tasks to be evaluated</label>
                </div>

                <ul>
                    <li>


                        <div class="BoxCenter">
                            <div class="row">
                                <div class="column left"><label class="taskLabelInAdd" >Task to be evaluated</label>
                                </div>
                                <div class="column right">
                                    <button class="evaluateTask">
                                        Evaluate
                                    </button>
                                </div>


                            </div>
                        </div>


                    </li>
                    <li>
                        <div class="BoxCenter">
                            <div class="row">
                                <div class="column left"><label class="taskLabelInAdd">Task to be evaluated</label>
                                </div>
                                <div class="column right">
                                    <button class="evaluateTask">
                                        Evaluate
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>


            </div>
        </div>
        <div class="current">

				
				
				
				<div class="Box">
                <div class="labelBox">
                    <label class="bigLabel">Current</label>
                    <label class="p-b-30 smallLabel">Tasks to be done</label>
                </div>

                <ul>
                    <li>


                        <div class="BoxCenter">
                            <div class="row">
                                <div class="column left"><label class="taskLabelInAdd">Task to be done</label>
                                </div>
                                <div class="column right">
                                    <div class="currentProjectLabel">
                                        Project
                                    </div>
                                </div>


                            </div>
                        </div>


                    </li>
                    <li>
                        <div class="BoxCenter">
                            <div class="row">
                                <div class="column left"><label class="taskLabelInAdd">Task to be done</label>
                                </div>
                                <div class="column right">
                                    <div class="currentProjectLabel">
                                        Project
                                    </div>
                                </div>


                            </div>
                        </div>
                    </li>

                </ul>


            </div>
        </div>
        <div class="history">
            <div class="Box">
                <div class="labelBox">
                    <label class="bigLabel">History</label>
                    <label class="p-b-30 smallLabel">View accomplished tasks</label>
                </div>

                <ul>
                    <li>


                        <div class="BoxCenter">
                            <div class="row">
                                <div class="column left"><label class="taskLabelInAdd">Done task</label>
                                </div>
                                <div class="column right">
                                    <div class="currentProjectLabel">
                                        Project
                                    </div>
                                </div>


                            </div>
                        </div>


                    </li>
                    <li>
                        <div class="BoxCenter">
                            <div class="row">
                                <div class="column left"><label class="taskLabelInAdd">Done task</label>
                                </div>
                                <div class="column right">
                                    <div class="currentProjectLabel">
                                        Project
                                    </div>
                                </div>


                            </div>
                        </div>
                    </li>

                </ul>


            </div>
        </div>
        </div>
				
				
				
				
				</div>
				
				
				
				
				
       



<!--===============================================================================================-->
<script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../../vendor/bootstrap/js/popper.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<../../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../../vendor/daterangepicker/moment.min.js"></script>
<script src="../../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="../../js/main.js"></script>

</body>
</html>