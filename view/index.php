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
    <div class="container-fluid landing_box">
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-xl-6">
                <div class="left_box_desc">
                    <div id="mainInfo" class="col-lg-6 mb-4">
                        <h1>CodeBook</h1>
                        <p>Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas
                            necessitatibus.</p>
                        <div class="buttons-box">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalRegister">Sign Up</button>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalLogin">Login</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-xl-6">
                <div class="right_box_log">
                    <img src="../images/logo.png" alt="CodeBook logo">
                </div>
            </div>
        </div>
    </div>
    <!-- <?php include('footer.php'); ?> -->
    <!-- <div class="container-fluid footer_part fixed-bottom">
        <div class="row p-4 bg-dark text-white copyright text-center">
            <span>Copyright &copy; 2020 KANE Projects</span>
        </div>
    </div> -->
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