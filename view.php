<?php 
    include "main.php";

    $sql = "SELECT *FROM users";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <h2>Users</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Sr_no</th>
                    <th>First NAme</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Task</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if($result->num_rows>0) {
                    while($row = $result->fetch_assoc()){
        
                ?>

                    <tr>

                    <td>
                        <?php echo $row['id'];?>
                    </td>
                    <td>
                        <?php echo $row['firstname'];?>
                    </td>
                    <td>
                        <?php echo $row['lastname'];?>
                    </td>
                    <td>
                        <?php echo $row['email'];?>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="update.php?id=<?php echo $row['id'];?>">Edit</a>

                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?> ">Delete</a>
                    </td>
                    
                    </tr>
                <?php }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>