<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeBook</title>
    <link rel="stylesheet" href="../styles/style_index.css">
    
    <?php include('bootstrap_styles.php'); ?>
</head>

<body>
<?php include('header.php'); ?>

   
<form class="container text-white align-items-center">
    
    <div class="row form-group"></div>

    <!--titel-->
    <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8 text-info">
            <h5>Create a Project</h5>
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>

    <!--ProjectName - CollabName-->
    <div class="row form-group">
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
    <div class="row form-group">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8">
            <label>Description</label>
            <div class="input-group mb-3">
            <textarea class="form-control" aria-label="With textarea" rows="4" cols="50"></textarea>
            </div>
        </div>
        <div class="col-md-2 col-sm-1"></div>        
    </div>
    <!--Skills-->
    <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="form-group col-md-4">
            <select class="custom-select" multiple>            
                <option selected>Select Skill</option>
                <option value="1">JavaScript</option>
                <option value="2">Node.js</option>
                <option value="3">PHP</option>
                <option value="4">React</option>
                <option value="5">SQL</option>
            </select>
        </div>
    <!--Github-->
        <div class="form-group col-md-4">
            <label>Github</label>
            <div>
            <input type="url" class="form-control" name="url">
            </div> 
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>
    <!--Create btn-->
    <div class="form-group row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8 text-center">
            <a href="" class="btn btn-default btn-primary btn-pill ">Create</a>
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>
</form>

<?php include('footer.php'); ?>
<?php include('bootstrap_scripts.php'); ?>
</body>
</html>