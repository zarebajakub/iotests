<?php
include('navbar.php');
$doc_root = $_SERVER['DOCUMENT_ROOT'];
?>

<form class="login100-form validate-form" action="/controllers/action-add-employee.php" method="post">
					<span class="login100-form-title p-b-43">
						Dodaj Zadanie Wybranemu Pracownikowi
					</span>


                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="project_id">
                    <span class="focus-input100"></span>
                    <span class="label-input100">project id</span>
                </div>


                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="user_id">
                    <span class="focus-input100"></span>
                    <span class="label-input100">ID pracownika</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="desc">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Opis</span>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Dodaj
                    </button>
                </div>


            </form>