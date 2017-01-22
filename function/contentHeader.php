<?php
    function contentHeader($headerId){
        switch ($headerId):
            case 'overview':
                return 
                "
                    <h1>
                        รายงานภาพรวมของระบบ
                        <small>PI Data Center</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> หน้าหลัก</a></li>
                        <li class=\"active\">Dashboard</li>
                    </ol>
                ";
            break;
        
            case 'officer':
                return 
                "
                    <h1>
                        รายการบุคลากร
                        <small>PI Data Center</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-users\"></i> บุคลากร</a></li>
                        <li class=\"active\">รายการบุคลากร</li>
                    </ol>
                ";
            break;
        
            case 'position':
                return 
                "
                    <h1>
                        รายการฝ่าย / ตำแหน่ง
                        <small>PI Data Center</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-sitemap\"></i>  ฝ่าย / ตำแหน่ง</a></li>
                        <li class=\"active\">รายการฝ่าย / ตำแหน่ง</li>
                    </ol>
                ";
            break;
        
            case 'user':
                return 
                "
                    <h1>
                        ผู้ใช้งานระบบ
                        <small>PI Data Center</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-user-secret\"></i>  ผู้ใช้งานระบบ</a></li>
                        <li class=\"active\">รายการฝ่าย / ตำแหน่ง</li>
                    </ol>
                ";
            break;
            
        endswitch;
    }
?>

