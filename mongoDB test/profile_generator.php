<?php

require "test.php";

// executes 
generateUsers();

function generateUsers()
{
    // Edit this info to make different random variables
    $first_name = array("Geert", "Reinaert", "Sander", "Stijn", "Cath", "Claas", "David", "Jan", "Kristel", "Moumita", "Naoyuki", "Tibo", "Welid", "Adel", "Aline", "Crisse", "Danny", "Thijs", "Kevin", "Erin", "Jasper", "Jeroen", "Kasra", "Lisa", "Myle", "Nathalie", "Rico", "Shadia", "Steven", "Tabitha");
    $last_name = array("Uyttendael", "Geeraerts", "Seeuws", "Depourcq", "Coleman", "Mulemaster", "Steigschmetterling", "The Clerk", "Von Mile Gem", "Basak", "Arakawa", "Labidi", "Lallaloui", "Longnose", "Sotto", "Joosen Louise-Hartley", "Springer", "De Schoenveter", "Tabrizionales", "Cant", "Truong", "Pillpopper", "Hangkok", "Nasman", "Notens", "Bidee");
    $password = "dummy";
    $github = "https://github.com";
    $job_title = array("Junior Front End Developer", "Senior Front End Developer", "Junior Back End Developer", "Senior Back End Developer","Junior Full Stack Developer","Senior Full Stack Developer","Dev Ops","UI Designer","UX Designer");
    //$email = array("@kane.com", "@fmail.com", "@jbidy.com", "@tlam.com", "@msn.be", "@jollywolly.com");
    $email = array("@kane.com");
    $profile_image = "https://www.cornwallbusinessawards.co.uk/wp-content/uploads/2017/11/dummy450x450.jpg";
    $created_at = date('Y-m-d');
    $data_users;
    $data_projects;
    $users_skills = array();
    $project_title = array("To Do List", "Tetris", "Weather API", "Uber Clone", "Instagram Clone", "Music API", "SnapChat", "AI face recognition", "Robotics", "Poker Game", "3D printer API", "Online RPG Game", "Arduino API", "Full Stack Framework");
    $project_description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    $project_skills = array();
    $num_collabs = array(2,3,4,5);
    $collaborators_id = array();
    $user_ids = array();
    $project_ids = array();

    //Connect to database
    $username = "KasraTabrizi";
    $password = "codebook";
    $database = connectDB($username, $password);

    //generate users
    for ($i = 0; $i < 5; $i++) {
        $fname = randomGen($first_name);
        $lname = randomGen($last_name);
        $jtitle = randomGen($job_title);
        //$mail = $fname . randomGen($email);
        $encryptPassword = password_hash($password, PASSWORD_DEFAULT);

        $data_users['email'] = $mail;
        $data_users['password'] = $encryptPassword;
        $data_users['first_name'] = $fname;
        $data_users['last_name'] = $lname;
        $data_users['job_title'] = $jtitle ;
        $data_users['github'] = $github;
        $data_users['profile_image'] = $profile_image;
        for($i = 0; $i < 5; $i++){
            $randomId = generateSkills($database);
            if(checkDuplicateSkill($users_skills, $randomId)){
                array_push($users_skills,$randomId);
            }
        }
        $data_users['skills'] = $users_skills;
        $data_users['collaborators'] = array();
        $data_users['projects'] = array();
        $data_users['created_at'] = $created_at;

        $user_id_new = createOneDB($database, "Users", $data_users);
        array_push($user_ids, getIdString($user_id_new));
        //var_dump($user_ids);
    }
    //generate projects
    for($i = 0; $i < 10; $i++){
        $ptitle = randomGen($project_title);
        $numcoll = randomGen($num_collabs);

        $data_projects['title'] = $ptitle;
        $data_projects['description'] = $project_description;
        $data_projects['github'] = $github;
        for($i = 0; $i < 5; $i++){
            $randomId = generateSkills($database);
            if(checkDuplicateSkill($project_skills, $randomId)){
                array_push($project_skills,$randomId);
            }
        }
        $data_projects['skills'] = $project_skills;
        $data_projects['number_of_collaborators'] = $numcoll;
        $data_projects['collaborators'] = array();

        $project_id_new = createOneDB($database, "Projects", $data_projects);
        array_push($project_ids, getIdString($project_id_new));
    }

    //asign 2 random projects to users

    //asign random collaborators as friends for users

    //then add the right users to those projects

    //asign random collaborators to users according to the number of collaborators

}
//function that generates random skills
function generateSkills($database){
    $result = randomDocument($database, "Skills", "icon-image", "https");
    foreach($result as $item){
        return getIdString($item["_id"]);
    }
}

//function that checks if the skill already occurs in the skills list of a user or project
function checkDuplicateSkill($array, $skillId){
    foreach($array as $item){
        if($skillId === $item){
            return false;
        }
    }
    return true;
}
//function which gets a random from the array
function randomGen($array){
    $random = rand(0, count($array)-1);
    $random = $array[$random];
    return $random;
}

?>