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
        $usersKey = array("email", "password", "first_name", "last_name", "job_title", "github", "profile_image", "skills", "collaborators", "projects", "created_at");
        $skillsKey = array("skill", "icon-image");
        $skillName = array("HTML","CSS", "Sass","Bootstrap","Tailwind","Javascript","jQuery","Typescript","Vue.js","React.js","Angular"
                           ,"Node.js","PHP", "Laravel","Python","WebPack","Django","Flask","Ruby","MySQL","MongoDB","PostgreSQL", "Drupal");
        $skillIconImage = array("https://img.icons8.com/dusk/48/000000/html-5.png", 
                                "https://img.icons8.com/color/48/000000/css3.png",
                                "https://img.icons8.com/windows/48/000000/sass.png",
                                "https://img.icons8.com/color/48/000000/bootstrap.png",
                                "https://svg2raster.fileformat.info/vlz.jsp?svg=%2Flogos%2Ftailwindcss%2Ftailwindcss-icon.svg&width=48&height=48",
                                "https://img.icons8.com/color/48/000000/javascript.png",
                                "https://img.icons8.com/ios-filled/48/000000/jquery.png",
                                "https://svg2raster.fileformat.info/vlz.jsp?svg=%2Flogos%2Ftypescriptlang%2Ftypescriptlang-icon.svg&width=48&height=48",
                                "https://img.icons8.com/color/48/000000/vue-js.png",
                                "https://img.icons8.com/nolan/48/react-native.png",
                                "https://img.icons8.com/color/48/000000/angularjs.png",
                                "https://img.icons8.com/color/48/000000/nodejs.png",
                                "https://img.icons8.com/officexs/48/000000/php-logo.png",
                                "https://img.icons8.com/ios-filled/48/000000/laravel.png",
                                "https://img.icons8.com/wired/48/000000/python.png",
                                "https://img.icons8.com/dusk/48/000000/webpack.png",
                                "https://svg2raster.fileformat.info/vlz.jsp?svg=%2Flogos%2Fdjangoproject%2Fdjangoproject-icon.svg&width=48&height=48",
                                "https://svg2raster.fileformat.info/vlz.jsp?svg=%2Flogos%2Fpocoo_flask%2Fpocoo_flask-icon.svg&width=48&height=48",
                                "https://img.icons8.com/nolan/48/ruby-programming-language.png",
                                "https://img.icons8.com/ios-filled/48/000000/mysql-logo.png",
                                "https://img.icons8.com/color/48/000000/mongodb.png",
                                "https://img.icons8.com/color/48/000000/postgreesql.png",
                                "https://img.icons8.com/color/48/000000/drupal.png");
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
        function updateOneDB($database,$collectionName,$data,$newData){
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

        //GET LENGTH OF A COLLECTION
        function collectionLength($database,$collectionName){
            $collection = $database->CodeBook->$collectionName;
            return $collection->count();
        }

        //GET ID STRING OF AN OBJECTID  
        function getIdString($objectId){
            return $objectId->jsonSerialize()['$oid'];
        }

        //GET A RANDON DOCUMENT FROM A COLLECTION
        function randomDocument($database, $collectionName, $fieldName, $keyWord){
            $data = array($fieldName => new MongoDB\BSON\Regex("^".$keyWord, 'i'));
            $collection = $database->CodeBook->Skills;
            $lenCollection = $collection->count();
            $result = $collection->find(
                $data,
                [
                    'limit' => 1,
                    'skip' => rand(0, $lenCollection),
                ]
                );
            return $result;
        }

        //TEST CONNECTION TO DATABASE
        $database = connectDB($username, $password);

        // $collection = $database->CodeBook->Skills;
        // var_dump($collection->getIndex());

        //TEST INSERT
        // $data = array("skill" => "Svelte");
        // $result = createOneDB($database, $collections['skills'], $data);
        // var_dump($result);

        //CREATE ALL THE SKILL AND ICON IMAGE DOCUMENTS IN THE SKILLS COLLECTION
        // for($i = 0; $i < count($skillName); $i++){
        //     $data = array("skill" => $skillName[$i], "icon-image" => $skillIconImage[$i]);
        //     $result = createOneDB($database, $collections['skills'], $data);
        // }

        //TEST READ ONE DOCUMENT
        // $data = array("skill" => "CSS");
        // $collection = $database->CodeBook->Skills;
        // $result = readOneDB($database, $collections['skills'], $data);
        // var_dump($result);

        //TEST GET RANDOM DOCUMENT
        $result = randomDocument($database, "Skills", "icon-image", "https");
        foreach($result as $item){
            var_dump($item);
        }

        //TEST READ EVERYTHING
        // $result = readCollection($database, $collections['users']);
        // var_dump(collectionLength($database, $collections['users']));
        // foreach($result as $item){
        //     var_dump($item["_id"]);
        // }

        //UPDATE ONE DOCUMENT
        // $newData = array("skill" => "PHP");
        // $data = array("skill" => "PHP: Hypertext Preprocessor");
        // $result = updateOneDB($database, $collections['skills'], $data, $newData );
        // var_dump($result);
        
        //DELETE ONE DOCUMENT
        // $data = array("skill" => "CSS");
        // $result = deleteOneDB($database, $collections['skills'], $data);
        // var_dump($result);

        //DELETE MULTIPLE DOCUMENTS
        // $data = array("github" => "https://github.com");
        // $result = deleteManyDB($database, $collections['users'], $data);
        // var_dump($result);
    ?>
</body>
</html>