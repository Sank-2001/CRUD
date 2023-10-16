<?php 
    include "main.php";

    if(isset($_POST['submit'])){
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];


    
    
    $sql = "INSERT INTO `users` (`firstname` , `lastname` , `email` , `password`) VALUES ('$first_name' , '$last_name' , '$email' , '$password')";
    
    $result = $conn->query($sql);

    if($result == TRUE){
        echo "new record created";
        
    }
    else{
        echo "error:  ".$sql.$conn->error;
    }

    $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
</head>
<body>

    <h1>Registration Form</h1>
    <form action="" method="POST">
        <Div>
            <h3>Personal Information</h3>
            first Name : <input type="text" name="firstname">
            Last Name : <input type="text" name="lastname">
            Email : <input type="text" name="email">
            Passord : <input type="password" name="password">
            <input type="submit" name="submit" value="submit">
        </Div>
    </form>
    
</body>
</html>