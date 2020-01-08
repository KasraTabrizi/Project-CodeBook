<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include('bootstrap_styles.php'); ?>
</head>

<body>
<?php include('header.php'); ?>


    
<section class="container grey-text align-items-center">
    <div class="container">
        <h4 class="center">Create a Project</h4>
        <div class="row">
            <div class="col">
                <label>Name Project</label>
                <div class="input-group mb-3">
                <input type="text" class="form-control" name="projectName">
                </div>
            </div>

            <div class="col">
                <label>Name Collaborator</label>
                <div class="input-group mb-3">
                <input type="text" class="form-control" name="collabName">
                </div>
            </div>
        </div>        
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <label>Description</label>
                <div class="input-group mb-3">
                <textarea class="form-control" aria-label="With textarea" rows="4" cols="50"></textarea>
                </div>
            </div>        
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <select class="custom-select" multiple>            
                    <option selected>Select Skill</option>
                    <option value="1">JavaScript</option>
                    <option value="2">Node.js</option>
                    <option value="3">PHP</option>
                    <option value="4">React</option>
                    <option value="5">SQL</option>
                </select>
            </div>

            <div class="col">
                <label>Github</label>
                <div align-items-center>
                <input type="url" name="homepage">
                </div> 
            </div>

            <div class="col">  
                <a href="" class="btn btn-primary py-3 px-5 btn-pill" role="button">Create</a>
            </div>
        </div>
    </form>
</section>

<?php include('footer.php'); ?>
<?php include('bootstrap_scripts.php'); ?>
</body>
</html>