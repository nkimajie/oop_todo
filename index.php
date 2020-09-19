<?php
    require_once('./config/dbconfig.php');
    $db = new operations();

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
                    <h1>Sign Up</h1>
                </div>
                <?php $db->Store_Record(); ?>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label >First Name</label>
                                <input class="form-control" type="text" name="first" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="last" required>
                            </div>
                            <div class="form-group">
                                <label >UserName</label>
                                <input class="form-control" type="text" name="username" required>
                            </div>
                            <div class="form-group">
                                <label >User Email</label>
                                <input class="form-control" type="email" name="useremail" required>
                            </div>
                            
                        
                    </div>
                <div class="card-footer">
                <button class="btn btn-success" name="save">Save</button>
                </form>
                </div>
                
            </div>
        </div>
    </div>
</div>

    
</body>
</html>