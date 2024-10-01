<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `crudtable` WHERE id = $id";
    $r = mysqli_query($conn, $sql);

    if($r){
        $sql_reorder = "SET @num := 0; 
                        UPDATE `crudtable` SET id = @num := (@num+1); 
                        ALTER TABLE `crudtable` AUTO_INCREMENT = 1";
        $reorder_result = mysqli_multi_query($conn, $sql_reorder);

        if($reorder_result){
            
            header('location: main.php');
        } else {
            die(mysqli_error($conn));
        }
    } else {
        die(mysqli_error($conn));
    }
}
?>
