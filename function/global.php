<?php
    function userCount($connect){
        include $connect;
        $sql = mysqli_query($con, "SELECT * FROM user");
        $num = mysqli_num_rows($sql);
        return $num;
    }
    function userData($usr_id,$connect){
        //get user's data from user table
        include $connect;
        $sql = mysqli_query($con, "SELECT * FROM user WHERE usr_id='$usr_id'");
        $result = mysqli_fetch_array($sql);
        return $result;
    }
    function positionData($connect, $pon_id){
        //get user's data from position table
        include $connect;
        $sql = mysqli_query($con, "SELECT * FROM position WHERE pon_id='$pon_id'");
        $result = mysqli_fetch_array($sql);
        return $result;
    }
    function positionQuery($connect){
        //get user's data from position table
        include $connect;
        $sql = mysqli_query($con, "SELECT * FROM position");
        return $sql;
    }
    function officerQuery($connect){
        include $connect;
        $sql = mysqli_query($con, "SELECT * FROM officer");
        return $sql;
    }
?>

