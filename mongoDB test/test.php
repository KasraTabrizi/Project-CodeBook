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

        //INSERT ONE DOCUMENT TO THE COLLECTION AND WILL RETURN THE ID OF THE NEW DOCUMENT
        function createOneDB($database, $collectionName, $data){
            $collection = $database->CodeBook->$collectionName;
            $result = $collection->insertOne($data);
            return $result->getInsertedId();
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
            $result = $collection->updateOne($data, ['$set' => $newData]);
            return $result;
        }

        //DELETE A DOCUMENT FROM A COLLECTION
        function deleteOneDB($database,$collectionName,$data){
            $collection = $database->CodeBook->$collectionName;
            $result = $collection->deleteOne($data);
            return $result;
        }

        //DELETE MULTIPLE DOCUMENTs FROM A COLLECTION
        function deleteManyDB($database,$collectionName,$data){
            $collection = $database->CodeBook->$collectionName;
            $result = $collection->deleteMany($data);
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
        // $data = array("skill" => "Svelte");
        // $result = createOneDB($database, $collections['skills'], $data);
        // var_dump($result);

        //TEST READ ONE DOCUMENT
        // $data = array("skill" => "PHP");
        // $result = readOneDB($database, $collections['skills'], $data);
        // var_dump((string)$result['_id']);

        //TEST READ EVERYTHING
        // $result = readCollection($database, $collections['users']);
        // var_dump(collectionLength($database, $collections['users']));
        // foreach($result as $item){
        //     var_dump($item["_id"]);
        // }

        //UPDATE ONE DOCUMENT
        // $newData = array("skill" => "PHP");
        // $data = array("skill" => "PHP: Hypertext Preprocessor");
        // $result = updateDB($database, $collections['skills'], $data, $newData );
        // var_dump($result);
        
        //DELETE ONE DOCUMENT
        // $data = array("skill" => "CSS");
        // $result = deleteOneDB($database, $collections['skills'], $data);
        // var_dump($result);

        //DELETE MULTIPLE DOCUMENTS
        // $data = array("email" => "test");
        // $result = deleteManyDB($database, $collections['users'], $data);
        // var_dump($result);
    ?>
</body>
</html>