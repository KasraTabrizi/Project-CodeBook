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

        $users = array("email" => "test", "password" => "test", "first name" => "test", "last name" => "test", "Job Title" => "test","Profile Image" => "test");

        $skill_names = array("HTML", "CSS", "Bootstrap", "TailWind", "Bulma", "Sass", 
                        "PHP", "MySQL", "MongoDB", "Javascript", "Typescript", "Vue.js", 
                        "React", "Angular", "Three.js", "OpenGL", "SVG", "Node.js", 
                        "Laravel", "Express.js");
        

        function connectDB($username, $password){
            $database = new MongoDB\Client("mongodb+srv://".$username.":".$password."@codebook-cqlfl.mongodb.net/test?retryWrites=true&w=majority");
            return $database;
        }

        function createDB($database, $collectionName, $data){
            $collection = $database->CodeBook->$collectionName;
            $result = $collection->insertOne($data);
        }

        function readOneDB($database, $collectionName, $data){
            $collection = $database->CodeBook->$collectionName;
            $result = $collection->findOne($data);
            return $result;
        }

        function readCollection($database, $collectionName){
            $collection = $database->CodeBook->$collectionName;
            $result = $collection->find();
            return $result;
        }

        function updateDB($database,$collectionName,$data,$replaceData){
            
        }

        function deleteDB($database,$collectionName,$data){

        }

        $database = connectDB($username, $password);
        $collection = $database->CodeBook->Users;
        $result = $collection->find();
        var_dump($collection->count());
        foreach($result as $item){
            var_dump($item["_id"]);
        }
        // $collection = $client->CodeBook->Skills;
        // foreach ($skills as $skill){
        //     $oneSkill = array("skill" => $skill);
        //     var_dump($oneSkill);
        //     $result = $collection->insertOne($oneSkill);
        // }
    ?>
</body>
</html>