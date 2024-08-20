<?php
//Check if form submited, insert form data into users table.
if(isset($_POST['Submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        //include database connection file
        include_once("config.php");
        //perform Query
        $sql = "update user_x_e_s set name = '$name', email = '$email', password = '$pass' where id = $id;";
        if ($conn->query($sql) === TRUE){
                echo "SUCCESSFUL UPDATE";
        }
        else {
                echo "FAIL TO UPDATE";
        }

}


header("Location: index.php?message=" . $message . "");



