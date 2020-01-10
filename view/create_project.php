<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeBook</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="../styles/dropdownCheckboxes.min.css">
    <?php include('bootstrap_styles.php'); ?>
</head>

<body>
<?php include('header.php'); ?>

   
<form class="container text-secondary align-items-center">

<br>
    <!--titel-->
    <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8 text-info">
            <h5>Create a Project</h5>
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>

    <!--ProjectName - CollabName-->
    <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-4">
            <label>Name Project</label>
            <div class="input-group mb-3">
            <input type="text" class="form-control" name="projectName">
            </div>
        </div>

        <div class="col-md-4">
            <label>Name Collaborator</label>
            <div class="input-group mb-3">
            <input type="text" class="form-control" name="collabName">
            </div>
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>        

    <!--Description-->
    <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8">
            <label>Description</label>
            <div class="input-group mb-3">
            <textarea class="form-control" aria-label="With textarea" rows="4" cols="50"></textarea>
            </div>
        </div>
        <div class="col-md-2 col-sm-1"></div>        
    </div>

    <!--Github-->
    <div class="row form-group">
        <div class="col-md-2 col-sm-1"></div>
    <div class="form-group col-md-8">
            <label>Github</label>
            <div>
            <input type="url" class="form-control" name="url">
            </div> 
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>

    <!-- THE GODDAMN SKILL DROPDOWN -->
    <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8 md-form form-sm mb-5">
            <form class='myform'>

                <div class="dropdown cq-dropdown" data-name='statuses'>
                    <button class="btn btn-info btn-md dropdown-toggle" type="button" id="btndropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
        <div class="col-md-2 col-sm-1"></div>
    </div>
   
    <!--Create btn-->
    
        <div class="d-flex justify-content-center">
            <a href="" class="btn btn-lg btn-info btn-pill ">Create</a>
        </div>  
</form>
<br>
<br>
<br>

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