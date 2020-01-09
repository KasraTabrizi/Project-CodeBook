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
    $email = array("@dummy.com", "@fmail.com", "@jbidy.com", "@tlam.com", "@msn.be", "@jollywolly.com");
    $profile_image = "https://www.cornwallbusinessawards.co.uk/wp-content/uploads/2017/11/dummy450x450.jpg";
    $created_at = date('Y-m-d');
    $data;
    $project_title = array("To Do List", "Tetris", "Weather API", "Uber Clone", "Instagram Clone", "Music API", "SnapChat", "AI face recognition", "Robotics", "Poker Game", "3D printer API", "Online RPG Game", "Arduino API", "Full Stack Framework");
    $project_description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    $project_skills;
    $num_collabs = array(2,3,4,5,6,7,8,9,10);
    $collaborators_id;
    $user_id;


    $username = "KasraTabrizi";
    $password = "codebook";
    $database = connectDB($username, $password);

    for ($i = 0; $i < 5; $i++) {
        $fname = randomGen($first_name);
        $lname = randomGen($last_name);
        $jtitle = randomGen($job_title);
        $mail = $fname . randomGen($email);
        $encryptPassword = password_hash($password, PASSWORD_DEFAULT);

        $data['email'] = $mail;
        $data['password'] = $encryptPassword;
        $data['first_name'] = $fname;
        $data['last_name'] = $lname;
        $data['job_title'] = $jtitle ;
        $data['github'] = $github;
        $data['profile_image'] = $profile_image;
        $data['skills'] = array();
        $data['collaborators'] = array();
        $data['projects'] = array();
        $data['created_at'] = $created_at;

        $id = createOneDB($database, "Users", $data);
        var_dump(getIdString($id));
    }
}
//function which gets a random from the array
function randomGen($array)
{
    $random = rand(0, count($array)-1);
    $random = $array[$random];
    return $random;
}

?>