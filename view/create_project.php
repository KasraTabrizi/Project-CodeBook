<?php 

    // define variables and initialize with empty values
    $projectName = $founder = $description = $url = "";
    $skills = array();

    //make array for errormessages- in the beginning the values are empty
    $errors = array('projectName' => '', 'founder' => '', 'description' => '', 'url' => '', 'skills'=> '');


    //check whether the form has been submitted 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //check projectName
        if(empty($_POST['projectName'])){
			$errors['projectName'] = 'Please fill in the projectName';
		} else{
			$projectName = $_POST['projectName'];
			if(!preg_match('/^[a-zA-Z\s0-9]+$/', $projectName)){
				$errors['projectName'] = 'ProjectName must be letters or numbers';
            }
        }

        if (empty($_POST["founder"])) {
            $founderErr = "Please fill in the foundername";
        }
        else {
            $founder = $_POST["founder"];
        }

    if (empty($_POST["description"]))  {
        $descriptionErr = "Please fill in the description";
    }
    else {
        $description = $_POST["description"];
    }

    if (empty($_POST["url"]))  {
        $urlErr = "Please fill in the url";
    }
    else {
        $url = $_POST["url"];
    }

    if (!isset($_POST["skills"])) {
        $skillsErr = "You must select 1 or more options";
    }
    else {
        $skills = $_POST["skills"];
    }
}

?>

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

   
<form class="container text-secondary align-items-center" method="POST"
 action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <br>
    <!--titel-->
    <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8 text-info">
            <h5>Create a Project</h5>
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>

    <!--ProjectName - founder-->

    <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-4">
            <label>Name Project</label>
            
            <input type="text" class="form-control" name="projectName" value="<?php echo htmlspecialchars($projectName);?>" >
            <div class="text-danger"><?php echo $errors['projectName']; ?></div>    
        
        </div>

        <div class="col-md-4">
            <label>Name Founder</label>
            <div class="input-group mb-3">
            <input type="text" class="form-control" name="founder">
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
            <textarea class="form-control" aria-label="With textarea" rows="4" cols="50" name="description"></textarea>
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

                <div class="dropdown cq-dropdown" data-name='statuses'>
                    <button class="btn btn-info btn-md dropdown-toggle" type="button" id="btndropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Your Expertise
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btndropdown" name="skills[]">
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
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>
   
    <!--Create btn-->
    
        <div class="d-flex justify-content-center">
            <input type="submit" name="submit" value="Create" class="btn btn-lg btn-info btn-pill ">
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