<?php

    require '_functions.php';
    $conn = db_connect();

    if(!$conn)
        die("Oh Shit!! Connection Failed");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_user"]))
    {
        $username = $_POST['user_name'];
        $password = $_POST['user_password'];
 
        $sql = "SELECT * FROM `customers` WHERE customer_name='$username';";
        $result = mysqli_query($conn, $sql);    
        if($row = mysqli_fetch_assoc($result)){
            $hash = $row['user_password'];
            // if(password_verify($password, $hash))
            // {
                // Login Sucessfull
                session_start();
                $_SESSION["loggedIn"] = true;
                $_SESSION["user_id"] = $row["customer_id"];//set the id of user here used in _user-header.php

                header("Location: ../../admin/user_dashboard.php");
                exit;
            // }
            
            // Login failure
            $error = true;
            header("Location: index.php?error=$error");
        
        }
    }
?>