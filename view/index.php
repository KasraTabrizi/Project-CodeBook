<?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        var_dump($_POST);
        exit;
    }
?>


<?php

    // if(....){   // if the login succeeds     

    //     // if you need to do other things on successful login, do them here!

    //     // send the user to another page
    //     header("Location: http://www.google.com/");

    //     // stop rendering the script on this page.
    //     exit;
        
    // }

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <title>CodeBook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="../styles/css/style_index.css">

    <?php include('bootstrap_styles.php'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="../styles/dropdownCheckboxes.min.css">

</head>

<body>


    <!-- Main container-->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row align-items-center">
                    <div id="mainInfo" class="col-lg-6 mb-4">
                        <img class="nonOpaque" src="../images/logo.png" alt="CodeBook logo">
                        <h1 class="nonOpaque">CodeBook</h1>
                        <p class="nonOpaque mb-4">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas
                            necessitatibus.</p>
                        <!-- pop up with more info-->
                        <p><a href="#" class="nonOpaque btn btn-dark py-3 px-5 btn-pill" data-toggle="modal" data-target="#centralModalSm">Learn more!</a></p>

                        <!-- DEVELOPMENT ONLY -->
                        <p><a href="dashboard.php" class="nonOpaque btn btn-dark py-3 px-5 btn-pill">/DEV/ to dash</a></p>

                    </div>

                    <!-- Central Modal Small -->
                    <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                        <!-- Change class .modal-sm to change the size of the modal -->
                        <div class="modal-dialog modal-sm" role="document">


                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Central Modal Small -->

                    <!--Modal: Login / Register Form-->
                    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog cascading-modal" role="document">
                            <!--Content-->
                            <div class="modal-content">

                                <!--Modal cascading tabs-->
                                <div class="modal-c-tabs">

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                                                Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                                                Register</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panels -->
                                    <div class="tab-content">
                                        <!--Panel 7 LOGIN -->
                                        <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                                            <!--Body-->
                                            <div class="modal-body mb-1">
                                                <form id="login" method="post">
                                                    <div class="md-form form-sm mb-5">
                                                        <i class="fas fa-envelope prefix"></i>
                                                        
                                                        <?php

                                                        // THE SIMPLE APPROACH

                                                        if(empty($_POST['email_login'])) {
                                                            // normal textbox
                                                            echo "<input name='email_login' type='email' id='modalLRInput10' class='form-control form-control-sm validation' placeholder='someone@somewhere.com'>";
                                                        }
                                                        else {
                                                            //filled in textbox
                                                            if(filter_var($_POST['email_login'], FILTER_VALIDATE_EMAIL)) {
                                                                echo "<input name='email_login' type='email' id='modalLRInput10' class='form-control form-control-sm validation' placeholder='someone@somewhere.com' value='" . $_POST['email_login'] .  "'>";

                                                            } else {
                                                                echo "<input name='email_login' type='email' id='modalLRInput10' class='form-control form-control-sm validation is-invalid' placeholder='someone@somewhere.com' value='" . $_POST['email_login'] .  "'>";

                                                            }
                                                        }

                                                        // THE SLIGHTLY MORE COMPLEX APPROACH
                                                        
                                                        $loginName = "";
                                                        $emailTextboxClassName = "";

                                                        if(!empty($_POST['email_login'])) {
                                                            $loginName = $_POST['email_login'];

                                                            if(filter_var($_POST['email_login'], FILTER_VALIDATE_EMAIL)) {
                                                                $invalidClass = "is-invalid";
                                                            }
                                                        }

                                                        echo "<input name='email_login' type='email' id='modalLRInput10' class='form-control form-control-sm validation ". $invalidClass ."' placeholder='someone@somewhere.com' value='" . $loginName .  "'>";



                                                        ?>
                                                        
                                                        
                                                        <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                                                        
                                                    </div>

                                                    <div class="md-form form-sm mb-4">
                                                        <i class="fas fa-lock prefix"></i>
                                                        <input name="password_login" type="password" id="modalLRInput11" class="form-control form-control-sm validate" placeholder="Password must be at least 5 characters">
                                                        <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                                                    </div>
                                                    <div class="text-center mt-2">
                                                        <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!--Footer-->
                                            <div class="modal-footer">
                                                <div class="options text-center text-md-right mt-1">
                                                    <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                                    <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                                </div>
                                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                        <!--/.Panel 7-->

                                        <!--Panel 8 REGISTER -->
                                        <div class="tab-pane fade" id="panel8" role="tabpanel">

                                            <!--Body-->
                                            <div class="modal-body">
                                                <div class="md-form form-sm mb-5">
                                                    <i class="fas fa-envelope prefix"></i>
                                                    <input name="first_name" type="text" id="modalLRInput12" class="form-control form-control-sm">
                                                    <label for="modalLRInput12">Your first name</label>
                                                </div>
                                                <div class="md-form form-sm mb-5">
                                                    <i class="fas fa-envelope prefix"></i>
                                                    <input name="last_name" type="text" id="modalLRInput13" class="form-control form-control-sm">
                                                    <label for="modalLRInput13">Your last name</label>
                                                </div>
                                                <div class="md-form form-sm mb-5">
                                                    <i class="fas fa-envelope prefix"></i>
                                                    <input name="email_register" type="email" id="modalLRInput14" class="form-control form-control-sm validate">
                                                    <label data-error="wrong" data-success="right" for="modalLRInput14">Your email</label>
                                                </div>
                                                <div class="md-form form-sm mb-5">
                                                    <i class="fas fa-envelope prefix"></i>
                                                    <input name="job_title" type="text" id="modalLRInput15" class="form-control form-control-sm" placeholder="E.G. Full Stack Developer">
                                                    <label for="modalLRInput15">Your job title</label>
                                                </div>
                                                <div class="md-form form-sm mb-5">
                                                    <i class="fas fa-envelope prefix"></i>
                                                    <input name="github" type="url" id="modalLRInput16" class="form-control form-control-sm validate">
                                                    <label data-error="wrong" data-success="right" for="modalLRInput16">Your github account</label>
                                                </div>
                                                <div class="md-form form-sm mb-5">
                                                    <i class="fas fa-envelope prefix"></i>
                                                    <input name="linkedin" type="url" id="modalLRInput17" class="form-control form-control-sm validate">
                                                    <label data-error="wrong" data-success="right" for="modalLRInput17">Your linkedin account</label>
                                                </div>
                                                <div class="md-form form-sm mb-5">
                                                    <i class="fas fa-envelope prefix"></i>
                                                    <input name="avatar" type="file" id="modalLRInput18" class="form-control form-control-sm validate">
                                                    <label data-error="wrong" data-success="right" for="modalLRInput18">Your avatar image</label>
                                                </div>
                                                <!-- THE GODDAMN SKILL DROPDOWN -->
                                                <div class="md-form form-sm mb-5">
                                                    <form class='myform'>

                                                        <div class="dropdown cq-dropdown" data-name='statuses'>
                                                            <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="btndropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                Your Expertise
                                                                <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="btndropdown">
                                                                <li>
                                                                    <label class="radio-btn">
                                                                        <input type="checkbox" value='jQuery' checked>
                                                                        jQuery
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="radio-btn">
                                                                        <input type="checkbox" value='Bootstrap'>
                                                                        Bootstrap
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="radio-btn">
                                                                        <input type="checkbox" value='HTML'>
                                                                        HTML
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="radio-btn">
                                                                        <input type="checkbox" value='JavaScript' checked>
                                                                        JavaScript
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="radio-btn">
                                                                        <input type="checkbox" value='CSS' checked>
                                                                        CSS
                                                                    </label>
                                                                </li>
                                                                <li class='text-center'>
                                                                    <button type='button' class='btn btn-xs btn-danger clear close-dropdown' value='Clear'>Clear</button>
                                                                    <button type='button' class='btn btn-xs btn-success save' value='Save'>Save</button>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <BR>



                                                    </form>

                                                </div>

                                                <div class="md-form form-sm mb-5">
                                                    <i class="fas fa-lock prefix"></i>
                                                    <input name="password_register" type="password" id="modalLRInput20" class="form-control form-control-sm validate">
                                                    <label data-error="wrong" data-success="right" for="modalLRInput20">Your password</label>
                                                </div>

                                                <div class="md-form form-sm mb-4">
                                                    <i class="fas fa-lock prefix"></i>
                                                    <input name="Password_register" type="password" id="modalLRInput21" class="form-control form-control-sm validate">
                                                    <label data-error="wrong" data-success="right" for="modalLRInput21">Repeat password</label>
                                                </div>

                                                <div class="text-center form-sm mt-2">
                                                    <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                                                </div>

                                            </div>
                                            <!--Modal Footer-->
                                            <div class="modal-footer">
                                                <div class="options text-right">
                                                    <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                                                </div>
                                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!--/.Panel 8-->
                                    </div>

                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                    <!--Modal: Login / Register Form-->

                    <div id="register" class="text-center m-auto">
                        <a href="" class="btn btn-light py-3 px-5 btn-pill" data-toggle="modal" data-target="#modalLRForm">LogIn/Register</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <?php include('footer.php'); ?>
    <?php include('bootstrap_scripts.php'); ?>

    <!--DROPDOWN MULTISELECT -->
    <script>
        $(function() {
            $('.cq-dropdown').dropdownCheckboxes();
        });
    </script>
    <script src="../resources/bootstrap_js/dropdownCheckboxes.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


</body>

</html>