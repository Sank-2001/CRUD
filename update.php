<?php 
    include "main.php";

    if(isset ($_POST['update'])){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_id = $_POST['user_id'];

        $sql = "UPDATE `users` SET `firstname`= '$firstname',`lastname` = '$lastname',`email` = '$email',`password`  = '$password' WHERE`id` = '$user_id'";


        $result = $conn->query($sql);

        if($result == TRUE) {
            echo "Record Updated ";

        }else {
            echo "Error:".$sql."<br>".$conn->error;

        }
        
    }

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $sql = "SELECT*FROM `users`WHERE`id`='$user_id'";

        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

                $first_name = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
                $password = $row['password'];
                $id = $row['id'];

            }
        ?>
<html>       
    <body>
        <h2>Update form</h2>
        <form action="" method="POST">
            <Div>
            <h3>Personal Information</h3>
                first Name :<br>
                    <input type="text" name="firstname" value="<?php echo $first_name; ?>">

                    <input type="hidden" name="user_id" value="<?php echo $id; ?>">

                Last Name : <br>
                    <input type="text" name="lastname" value="<?php echo $lastname; ?>">
                Email :<br>
                     <input type="email" name="email" value="<?php echo $email; ?>">
                Passord :<br>
                    <input type="password" name="password" value="<?php echo $password; ?>">
                
                    <input type="submit" value="Update" name="update">
            </Div>
        </form>
    </body>
</html>

<?php 
        }else{
            header('Location: view.php');
        }
    }
?>