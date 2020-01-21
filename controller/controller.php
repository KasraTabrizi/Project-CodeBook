<?php

require "../model/model.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['login-button'])){
        header("Location: ../view/dashboard.php");
    }

}


?>