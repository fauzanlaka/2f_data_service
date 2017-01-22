<?php
    header("content-type: text/javascript");
    
    include '../../../connect/connect.php';
    
    $usr_id = $_POST['usr_id'];
    
    $pon_name = $_POST['pon_name'];
    $pon_name_text = addslashes($pon_name);
    
    $pon_detail = $_POST['pon_detail'];
    $pon_detail_text = addslashes($pon_detail);
    
    $pon_add_date = date("Y-m-d");
    
    $insert = mysqli_query($con, "INSERT INTO position 
                          (pon_name,pon_detail,pon_add_date,usr_id_add,usr_id_edit,pon_edit_date)
                          VALUES 
                          ('$pon_name_text','$pon_detail_text','$pon_add_date','$usr_id','$usr_id','$pon_add_date')
                          ");
    echo "alert('เพิ่มข้อมูลฝ่าย/ตำแหน่ง');";
    echo "location = 'main.php?mod=position';";
?>