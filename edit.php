<?php
    require_once('./config/dbconfig.php');
    $db = new operations();

    $db->update_record();
    $id = $_GET['e_id'];
    $result =  $db->get_record($id);
    $data = mysqli_fetch_assoc($result);

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
        <div class="col-lg-6 m-auto">
            <div class="card m-5">
                <div class="card-header">
                    <h1>Update</h1>
                </div>
                <?php $db->Store_Record(); ?>
                    <div class="card-body">
                        <form method="post" action="">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <div class="form-group">
                                <label >First Name</label>
                                <input class="form-control" type="text" name="first" value="<?php echo $data['firstname']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="last" value="<?php echo $data['lastname']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label >UserName</label>
                                <input class="form-control" type="text" name="username" value="<?php echo $data['username']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label >User Email</label>
                                <input class="form-control" type="email" name="useremail" value="<?php echo $data['email']; ?>" required>
                            </div>
                            
                        
                    </div>
                <div class="card-footer">
                <button class="btn btn-success" name="update">Update</button>
                </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
    
</body>
</html>