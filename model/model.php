<?php

    require "../MongoDB test/database.php";


// function createButton(){
//     $buttonNames = array("button1","button2","button3","button4","button5",);
//     for($i = 0; $i < count($buttonNames); $i++){
//         echo '<button type="button" class="btn btn-lg btn-outline-success" data-toggle="modal" data-target="#modalLogin">'.$buttonNames[$i].'</button>';
//     }
// }    

//USER RELATED FUNCTIONS

//CREATES A NEW USER IN DATABASE WHEN REGISTERED
function createUserDB($data){
    $collectionName = "Users";
    $database = connectDB("KasraTabrizi", "codebook");
    $user_id = reateOneDB($database, $collectionName, $data);
}

function generateUser(){

}

//DELETES USERACCOUNT
function deleteUserDB($data){ 
    $collectionName = "Users";
    $database = connectDB("KasraTabrizi", "codebook");
    $result = deleteOneDB($database,$collectionName,$data);
}

//ADDS A COLLABORATOR
function addCollaboratorDB(){

}

//DELETES A COLLABORATOR
function deleteCollaboratorDB(){

}

//---------------------------------------------------------------
//PROJECT RELATED FUNCTIONS

//CREATES A NEW PROJECT
function createProject(){

}

//DELETES A PROJECT
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
function generateProjectsUser($userProjectsId){
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