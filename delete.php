<?php 
if(!empty($_POST) && $_POST["id"] > 0) { 

    $delete_qry = mysqli_execute(mysqli_query("UPDATE users SET status=2 WHERE id=".$_POST['id'].")"));

    if (!$delete_qry) {
        echo "Delete Entry failed, ";
    }
}