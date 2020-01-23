<?php

    require "../mongoDB test/database.php";
    
    session_start();

//LOGIN RELATED FUNCTIONS

//checks if user exists in DB, if so return its ID
function checkUserLogin(){

}

//---------------------------------------------------------------
//REGISTRATION RELATED FUNCTIONS

//registers een new user into the DB
function registerUser(){

}

//USER RELATED FUNCTIONS

//CREATES A NEW USER IN DATABASE WHEN REGISTERED
function createUserDB($data){
    $collectionName = "Users";
    $database = connectDB("KasraTabrizi", "codebook");
    $user_id = createOneDB($database, $collectionName, $data);
}

//DELETES USERACCOUNT FROM DB
function deleteUserDB($data){ 
    $collectionName = "Users";
    $database = connectDB("KasraTabrizi", "codebook");
    $result = deleteOneDB($database,$collectionName,$data);
}

//ADDS A COLLABORATOR TO DB
function addCollaboratorDB(){

}

//DELETES A COLLABORATOR FROM DB
function deleteCollaboratorDB(){

}

//GENERATE USER PROFILE CARD ON THE PAGE
function generateUserProfile($user, $database){
      echo '<div class="col-xl-4 col-sm-12 col-md-8 text-center mt-5">';
      echo '<div class="bg-white rounded shadow-sm py-5 px-4">';
      echo '<img src='.$user->profile_image.' width="150" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" alt="" />';
      echo '<h5 class="mb-0">'.$user->first_name.' '.$user->last_name.'</h5>';
      echo '<span class="small text-uppercase text-muted">'.$user->job_title.'</span>';
      echo <<<EOT
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
            EOT;
    echo '<ul class="social mb-0 list-inline mt-3">';
    foreach($user->skills as $skill){
        $data = array("_id" => new MongoDB\BSON\ObjectId($skill));
        $result = readOneDB($database, "Skills", $data);
        $iconImageLink = $result['icon-image'];
        echo <<<EOT
            <li class="list-inline-item">
                <img src=$iconImageLink alt="">
            </li>
        EOT;
    }
    echo <<<EOT
        </ul>
        </div>
        </div>
        EOT;
}

//GENERATE USER COLLABORATORS ON THE PAGE
function generateUserCollabs($user, $database){
    foreach($user->collaborators as $collabId){
        $data = array("_id" => new MongoDB\BSON\ObjectId($collabId));
        $result = readOneDB($database, "Users", $data);
        $name = $result['first_name'].' '.$result['last_name'];
        $job_title= $result['job_title'];
        $avatar = $result['profile_image'];
    echo <<<EOT
        <div class="col-xl-4 col-sm-12 col-md-8 text-center mt-5">
            <div class="bg-white rounded shadow-sm py-5 px-4">
                <img src=$avatar width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" alt="" />
                <h5 class="mb-0">$name</h5>
                <span class="small text-uppercase text-muted">$job_title</span>
                <div class="col-4">
                    <button class="btn btn-light btnProfile">Profile</button>
                </div>
            </div>
        </div>
        EOT;
    }
}

//---------------------------------------------------------------
//PROJECT RELATED FUNCTIONS

//CREATES A NEW PROJECT TO DB
function createProject(){

}

//DELETES A PROJECT FROM DB
function deleteProject($data){
    $collectionName = "Projects";
    $database = connectDB("KasraTabrizi", "codebook");
    $result = deleteOneDB($database,$collectionName,$data);
}

//ADD A PROJECT
function addProject(){

}

//read all the projects IDs of the user 
function getUserProjects($data){
    $collectionName = "Users";
    $database = connectDB("KasraTabrizi", "codebook");
    $userProjectsId = readOneDB($database, $collectionName, $data);
    return $userProjectsId;
}

//GENERATE ALL THE PROJECTS ON THE DASHBOARD PAGE FROM THE USER
function generateUserProjects($user, $database){

    //create a for foreach that iterates through each project id and 
    foreach($user->projects as $projectId){
        //retrieve each project
        $data = array("_id" => new MongoDB\BSON\ObjectId($projectId));
        $result = readOneDB($database, "Projects", $data);
        $title = $result['title'];
        $description = $result['description'];
        //generate html for that project
        echo <<<EOT
        <div class="container-fluid resultsContainer">
            <div class="row resultsChild">
                <div class="col col-8">
                    <div class="row">$title</div>
                    <div class="row">
                        <div>
                            <header>DESCRIPTION</header>
                        </div>
                        <div>
                            <p>$description</p>
                        </div>
                    </div>
                    <div class="row">COLLABORATORS</div>
                    <div class="row">SKILLS</div>
        EOT;
        echo '<ul class="social mb-0 list-inline mt-3">';
        foreach($result->skills as $skill){
            $data = array("_id" => new MongoDB\BSON\ObjectId($skill));
            $result = readOneDB($database, "Skills", $data);
            $iconImageLink = $result['icon-image'];
            echo <<<EOT
                <li class="list-inline-item">
                    <img src=$iconImageLink alt="">
                </li>
            EOT;
        }
        echo <<<EOT
        </div>
            <div class="col col-4">
                <button class="btn btn-primary btnGithub">GITHUB</button>
            </div>
            </div>
        </div>
        EOT;
    }
}
//---------------------------------------------------------------
//SKILL RELATED FUNCTIONS

//GENERATE ALL THE SKILLS IN THE CHECKBOXES OF THE REGISTRATION BOX
function generateSkillsToCheckBoxes($database, $collectionName, $categorie){
    echo <<<EOT
        <div class="form-group row">
         <label for="skills" class="col-md-4 col-form-label text-md-right">$categorie Skills</label>
         <div class="dropdown col-md-6">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Choose your Skills
          </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        EOT;

    $result = readCollection($database, $collectionName);
    //var_dump($result);
    //echo $result;
    foreach($result as $item){
        if($item['categorie'] === $categorie){
            echo '<div class="checkbox">';
            echo '<label>';
            echo '<input type="checkbox" name="skill">' . $item['skill'];
            echo '</label>';
            echo  '</div>';
        }
        //echo $value;
    }

    echo <<<EOD
         </div>
         </div>
         </div>
         EOD;
}

//---------------------------------------------------------------
//FILTER RELATED FUNCTIONS

//SHOW LIST OF ALL PROJECTS
function showAllProjects(){

}

//FILTER ON PROJECTS
function filterProjects(){

}

//SHOW LIST OFF ALL COLLABORATORS
function showAllCollaborators(){

}

//FILTER ON COLLABORATORS
function filterCollaborators(){
    
}

?>