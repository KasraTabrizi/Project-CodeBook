<!DOCTYPE html>
<html lang="en">

<head>
    <title>CodeBook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/css/style_index.css">

    <?php include('bootstrap_styles.php'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="../styles/dropdownCheckboxes.min.css">

</head>

<?php
    require "../model/model.php";
?>


<body>
    <!-- Main container-->
    <div class="container-fluid landing_box">
        <div class="row row_box">
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="left_box_desc">
                    <h1>Code Book</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, provident est, enim maxime eligendi incidunt odio quis.</p>
                    <div class="buttons-box">
                        <button type="button" class="btn btn-lg btn-outline-primary" data-toggle="modal" data-target="#modalRegister">Sign Up</button>
                        <button type="button" class="btn btn-lg btn-outline-warning" data-toggle="modal" data-target="#modalLogin">Login</button>
                        <!-- Modal Registration-->
                        <div class="modal fade" id="modalRegister" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <!-- <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div> -->
                                    <div class="modal-body">
                                        <form name="my-form" action="" method="">
                                            <div class="form-group row">
                                                <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="first_name" class="form-control" name="first-name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="last-name" class="form-control" name="last-name">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="job-title" class="col-md-4 col-form-label text-md-right">Job Title</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="job-title" class="form-control" name="job-title">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="email_address" class="form-control" name="email-address">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                                <div class="col-md-6">
                                                    <input type="password" id="password" class="form-control" name="password">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password-repeat" class="col-md-4 col-form-label text-md-right">Password Repeat</label>
                                                <div class="col-md-6">
                                                    <input type="password" id="password-repeat" class="form-control" name="password-repeat">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="github" class="col-md-4 col-form-label text-md-right">Github</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="github" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="avatar" class="col-md-4 col-form-label text-md-right">Avatar</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="avatar" class="form-control">
                                                </div>
                                            </div>
                                            <?php
                                                 $username = "KasraTabrizi";
                                                 $password = "codebook";
                                                 $database = connectDB($username, $password);
                                                 generateSkillsToCheckBoxes($database, "Skills", "frontend");
                                                 generateSkillsToCheckBoxes($database, "Skills", "backend");
                                                 generateSkillsToCheckBoxes($database, "Skills", "database");
                                                 generateSkillsToCheckBoxes($database, "Skills", "CMS");
                                            ?>
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                Register
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Login-->
                        <div class="modal fade" id="modalLogin" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <!-- <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div> -->
                                    <div class="modal-body">
                                        
                                    <form name="my-form" action="" method="">
                                            <div class="form-group row">
                                                <label for="full_name" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="full_name" class="form-control" name="full-name">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Password</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="email_address" class="form-control" name="email-address">
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                Login
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="right_box_logo">
                    <img src="../images/logo_landingpage.jpg" alt="CodeBook logo">
                </div>
            </div>
        </div>
    </div>

    <?php include('bootstrap_scripts.php'); ?>
    <script src="../resources/bootstrap_js/dropdownCheckboxes.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!--DROPDOWN MULTISELECT -->
    <script>
            $(function() {
                $('.cq-dropdown').dropdownCheckboxes();
            });
    </script>
    
</body>
</html>