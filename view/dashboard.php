<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeBook - Dashboard</title>
    <link rel="stylesheet" href="../styles/style_dash.css">
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <?php include('bootstrap_styles.php'); ?>



</head>

<body>
    <?php include('header.php'); ?>
    <!--whole page container -->
    <div class="container-fluid" style="margin-top:30px">

        <!-- top row container -->
        <!-- <div class="container"> -->
            <div class="row">

                <div class="col-xl-4 col-sm-12 col-md-8 text-center mt-5">
                    <!-- CARD -->
                    <!-- <div class="col-xl-6 col-sm-6 mb-5"> -->
                        <div class="bg-white rounded shadow-sm py-5 px-4">
                            <img src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" alt="" />
                            <h5 class="mb-0">Nathalie Pillen</h5>
                            <span class="small text-uppercase text-muted">CEO - Founder</span>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item">
                                    <a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of team item-->
                <!-- </div> -->
            <!-- </div> -->
            <!--end row text-center-->

            <hr class="d-sm-none">
        <!-- </div> -->

        <!-- bottom row container -->
        <!-- <div class="container"> -->
            <!-- <div class="row"> -->
                <div class="col-xl-4 col-sm-12 col-md-8">
                    <h2>Projects</h2>
                    <!-- PROJECT LIST ITEM -->
                    <div class="container-fluid resultsContainer">
                        <div class="row resultsChild">
                            <div class="col col-8">
                                <div class="row">TITLE PROJECT</div>
                                <div class="row">
                                    <div>
                                        <header>DESCRIPTION</header>
                                    </div>
                                    <div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Maiores, itaque.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">COLLABORATORS</div>
                                <div class="row">SKILLS</div>
                            </div>
                            <div class="col col-4">
                                <button class="btn btn-primary btnGithub">GITHUB</button>
                            </div>
                        </div>
                    </div>
                    <!--end of container-->

                    <div class="container-fluid resultsContainer">
                        <div class="row resultsChild">
                            <div class="col col-8">
                                <div class="row">TITLE PROJECT</div>
                                <div class="row">
                                    <div>
                                        <header>DESCRIPTION</header>
                                    </div>
                                    <div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Maiores, itaque.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">COLLABORATORS</div>
                                <div class="row">SKILLS</div>
                            </div>
                            <div class="col col-4">
                                <button class="btn btn-primary btnGithub">GITHUB</button>
                            </div>
                        </div>
                    </div>
                    <!--end of container-->


                </div>
                <div class="col-xl-4 col-sm-12 col-md-8">
                    <h2>Collaborators</h2>
                    <div class="fakeimg">Fake Image</div>
                    <p>Some text..</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi nesciunt omnis atque hic consequuntur, suscipit iure perferendis quisquam numquam officiis placeat doloribus, quia odio explicabo quas consequatur libero quam corporis at illum voluptas? Consectetur excepturi ab cum error reiciendis ea?</p>
                </div>
            </div>
            <!-- end bottom row container -->
        </div>
        <!--end whole page container -->
    </div>

    <?php include('footer.php'); ?>
    <?php include('bootstrap_scripts.php'); ?>
</body>

</html>