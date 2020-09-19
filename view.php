<?php
    require_once('./config/dbconfig.php');
    $db = new operations();
    $result = $db->view_reord();
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Todo List</title>
</head>
<body class="bg-dark">
<div class="container">
    <div class="row">
       <div class="col">
           <div class="card m-5">
                   <div class="card-header">
                       <h2 class="text-center text-dark">Employee Record</h2>
                   </div>
                   <div class="card-body">
                       <?php 
                       $db->display_message();
                       $db->display_message();
                       ?>
                       <table class="table table-bordered">
                           
                           <thead>
                               <tr>
                                   <td>ID</td>
                                   <td>First Name</td>
                                   <td>Last Name</td>
                                   <td>User Name</td>
                                   <td>User Email</td>
                                   <td>Edit</td>
                                   <td>Delete</td>
                               </tr>
                               
                           </thead>
                           <tbody>
                           <tr>
                                   <?php
                                   while($data = mysqli_fetch_assoc($result)){
                                       ?>
                                   
                                <td><?php echo $data['id'] ?></td>
                                <td><?php echo $data['firstname'] ?></td>
                                <td><?php echo $data['lastname'] ?></td>
                                <td><?php echo $data['username'] ?></td>
                                <td><?php echo $data['email'] ?></td>
                                <td><a href="edit.php?e_id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a></td>
                                <td><a href="delete.php?d_id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
                               </tr>
                               <?php
                                   }
                                   ?>
                           </tbody>
                       </table>
                   </div>
           </div>
       </div>
    </div>
</div>
    
</body>
</html>