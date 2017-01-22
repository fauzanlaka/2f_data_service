<?php
    header("content-type: text/javascript");
    
    include '../../../connect/connect.php';
    
    $id = $_GET['id'];
    
    //echo "alert('lll');";
    
    $delete = mysqli_query($con, "DELETE FROM officer WHERE ofr_id='$id'");
    
    echo "alert('ข้อมูลถูกลบเเล้ว');";
    echo "location= 'main.php?mod=officer';";
?>

