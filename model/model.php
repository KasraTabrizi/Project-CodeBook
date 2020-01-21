<?php

    require "../mongoDB test/database.php";


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
function generateUserProfile(){

}

//GENERATE USER COLLABORATORS ON THE PAGE
function generateUserCollabs(){

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
function generateUserProjects($userProjectsId){
    $data = array();
    $projects = array();
    $database = connectDB("KasraTabrizi", "codebook");
    $collectionName = "Projects";
    foreach($userProjectsId as $id){
        $data = array("_id" => $id);
        readOneDB($database, $collectionName, $data);
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