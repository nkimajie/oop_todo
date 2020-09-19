<?php
    require_once('./config/dbconfig.php');
    $db = new operations();
    
    if(isset($_GET['d_id'])){
        global $db;
        $id = $_GET['d_id'];
        if($db->delete_record($id)){
            $db->set_message('<div class="alert alert-danger" role="alert">Your Record Has Been Deleted</div>');
               header('location: view.php');
        }else{
            $db->set_message('<div class="alert alert-danger" role="alert">Something Went Wrong</div>');
        }
    }

?>

