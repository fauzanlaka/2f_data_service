<?php
    header("content-type: text/javascript");
    
    include '../../../connect/connect.php';
    
    $usr_id = $_POST['usr_id'];
    
    $ofr_firstname = $_POST['ofr_firstname'];
    $ofr_firstname_text = addslashes($ofr_firstname);
    
    $ofr_lastname = $_POST['ofr_lastname'];
    $ofr_lastname_text = addslashes($ofr_lastname);
    
    $ofr_date_of_birth = $_POST['ofr_date_of_birth'];
    $ofr_date_of_birth_text = addslashes($ofr_date_of_birth);
    
    $ofr_gender_text = $_POST['ofr_gender'];
    
    $ofr_idnumber = $_POST['ofr_idnumber'];
    
    $pon_id_text = $_POST['pon_id'];
    
    $ofr_email = $_POST['ofr_email'];
    $ofr_email_text = addslashes($ofr_email);
    
    $ofr_telephone = $_POST['ofr_telephone'];
    $ofr_telephone_text = addslashes($ofr_telephone);
    
    $ofr_facebook = $_POST['ofr_facebook'];
    $ofr_facebook_text = addslashes($ofr_facebook);
    
    $ofr_lineid = $_POST['ofr_lineid'];
    $ofr_laineid_text = addslashes($ofr_lineid);
    
    $ofr_register_date = date("Y-m-d");
    
    //echo "alert('$ofr_laineid_text');";
    
    $insert = mysqli_query($con, "INSERT INTO officer
                          (ofr_firstname,ofr_lastname,ofr_date_of_birth,ofr_idnumber,ofr_gender,ofr_email,ofr_telephone,ofr_facebook,ofr_lineid,ofr_register_date,ofr_last_update,ofr_username,ofr_password,pon_id,usr_id)
                          VALUES
                          ('$ofr_firstname_text','$ofr_lastname_text','$ofr_date_of_birth_text','$ofr_idnumber','$ofr_gender_text','$ofr_email_text','$ofr_telephone_text','$ofr_facebook_text','$ofr_laineid_text','$ofr_register_date','$ofr_register_date','$ofr_firstname_text','123','$pon_id_text','$usr_id')
                          ");
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "location = 'main.php?mod=officer';";
?>

