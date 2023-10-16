<?php
    include "main.php";

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $sql = "DELETE FROM `users` WHERE `id`='$user_id'";

        $result = $conn->query($sql);

        if($result == TRUE) {
            echo "reord deleted";

        }else{
            echo "Error : " . $sql . $conn->error;

        }
    }

?>