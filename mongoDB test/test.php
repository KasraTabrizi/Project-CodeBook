<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // This path should point to Composer's autoloader
        require 'C://Users/kasra/vendor/autoload.php';
        $username = "KasraTabrizi";
        $password = "codebook";
        $collections = array("users" => "Users", "skills" => "Skills", "project" => "Projects");
        $usersKey = array("email", "password", "first_name", "last_name", "job_title", "github", "profile_image", "skills", "collaborators", "projects");
        $skillsKey = array("skill", "icon-image");
        $skillName = array("HTML", "CSS", "Bootstrap", "TailWind", "Bulma", "Sass", 
                        "PHP", "MySQL", "MongoDB", "Javascript", "Typescript", "Vue.js", 
                        "React", "Angular", "Three.js", "OpenGL", "SVG", "Node.js", 
                        "Laravel", "Express.js");
        $skillIconImage = array();
        $projectsKey = array("title", "description", "github", "skills", "number_of_collaborators", "collaborators");

        $users = array("email" => "test", "password" => "test", "first name" => "test", "last name" => "test", "Job Title" => "test","Profile Image" => "test");

        //CONNECT TO THE DATABASE
        function connectDB($username, $password){
            $database = new MongoDB\Client("mongodb+srv://".$username.":".$password."@codebook-cqlfl.mongodb.net/test?retryWrites=true&w=majority");
            return $database;
        }

        //INSERT ONE DOCUMENT TO THE COLLECTION
        function createOneDB($database, $collectionName, $data){
            $collection = $database->CodeBook->$collectionName;
            $result = $collection->insertOne($data);
        }

        //READ ONE DOCUMENT OF A COLLECTION
        function readOneDB($database, $collectionName, $data){
            $collection = $database->CodeBook->$collectionName;
            $result = $collection->findOne($data);
            return $result;
        }

        //READ AN ENTIRE COLLECTION
        function readCollection($database, $collectionName){
            $collection = $database->CodeBook->$collectionName;
            $result = $collection->find();
            return $result;
        }

        //UPDATE A DOCUMENT IN A COLLECTION
        function updateDB($database,$collectionName,$data,$newData){
            $collection = $database->CodeBook->$collectionName;
            $result = $collection->updateOne($date, ['$set' => $newData]);
            return $result;
        }

        //DELETE A DOCUMENT FROM A COLLECTION
        function deleteDB($database,$collectionName,$data){
            $collection = $database->CodeBook->$collectionName;
            $result = $collection->deleteOne($data);
            return $result;
        }

        //
        function collectionLength($database,$collectionName){
            $collection = $database->CodeBook->$collectionName;
            return $collection->count();
        }

        //TEST CONNECTION TO DATABASE
        $database = connectDB($username, $password);

        //TEST INSERT

        //TEST READ ONE DOCUMENT

        //TEST READ EVERYTHING
        $result = readCollection($database, $collections['users']);
        var_dump(collectionLength($database, $collections['users']));
        foreach($result as $item){
            var_dump($item["_id"]);
        }

        //UPDATE ONE DOCUMENT


        //DELETE ONE DOCUMENT

    ?>
</body>
</html>