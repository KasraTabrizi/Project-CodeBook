<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeBook - Dashboard</title>
    <link rel="stylesheet" href="../styles/css/style_dash.css">
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <?php include('bootstrap_styles.php'); ?>
</head>

<?php
    require "../controller/controller.php";
?>

<body>
    <?php include('header.php'); ?>
    <!-- WHOLE PAGE CONTAINER -->
    <div class="container-fluid" style="margin-top:30px">
        <div class="row">

        <?php
            $username = "KasraTabrizi";
            $password = "codebook";
            $database = connectDB($username, $password);

            //retrieve the user data from the DB
            $data = array("email" => "David@kane.com");
            $result = readOneDB($database, "Users", $data);

            //generate the profile card
            generateUserProfile($result, $database);
        ?>
        <hr class="d-sm-none">
            <!-- PROJECTS -->
            <div class="col-xl-4 col-sm-12 col-md-8">
                <h2>Projects</h2>
            <?php
                generateUserProjects($result, $database);
            ?>
            </div>
            <!-- END OF PROJECTS -->

            <!-- START OF COLLABORATORS -->
            <div class="col-xl-4 col-sm-12 col-md-8">
                <h2>Collaborators</h2>
                <div class="row">
                    <!-- COLLABORATOR LIST ITEM -->
                    <?php
                        generateUserCollabs($result, $database);
                    ?>
                    <!-- END OF COLLABORATOR LIST ITEM -->
                </div>
            </div>
            <!-- END OF COLLABORATORS -->
        </div>
        <!-- END ROW -->
    </div>
    <!--END WHOLE PAGE CONTAINER -->

    <?php include('footer.php'); ?>
    <?php include('bootstrap_scripts.php'); ?>
</body>

</html>