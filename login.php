<?php
    header("content-type: text/javascript");
    session_start();
    include 'connect/connect.php';
    //sleep(2);
    $login = mysql_real_escape_string($_POST['username']);
    $loginText = addslashes($login);
    $password = mysql_real_escape_string($_POST['password']);
    $passwordText = addslashes($password);
     
    $sql = mysqli_query($con, "SELECT * FROM user WHERE usr_username='$loginText' AND usr_password='$passwordText'");
    $num = mysqli_num_rows($sql); 
    $result = mysqli_fetch_array($sql);

    if($num < 1){ 
        echo "document.getElementById('loginStatus').innerHTML = '<font color=\"red\">ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง</font>'";
    }else{
        sleep(1);
        $_SESSION["usr_id"] = $result["usr_id"];
        $id = $_SESSION["usr_id"];
        $status = $result['usr_status'];
            
        echo "location = 'main.php';";  
        
    }

?>
