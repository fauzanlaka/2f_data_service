<?php
    //include 'function/global.php';
    //$usr_id = $_SESSION['usr_id'];
    //$connect = 'connect/connect.php';
    $result = userData($usr_id,$connect);
    $usr_fistname_th = str_replace("\'", "&#39;", $result['usr_firstname_th']);
    $usr_lastname_th = str_replace("\'", "&#39;", $result['usr_lastname_th']);
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $usr_fistname_th ?> <?= $usr_lastname_th ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
          
        <li class="header"><b>เมนูหลัก</b></li>
        
        <li class="treeview">
            
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>ตั้งค่าระบบ</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="?mod=user"><i class="fa fa-user-secret"></i> ผู้ใช้งานระบบ</a></li>
                <li><a href="?mod=position"><i class="fa fa-sitemap"></i> ฝ่าย / ตำแหน่ง</a></li>
            </ul>
            
        </li>
        
        <li><a href="?mod=overview"><i class="fa fa-dashboard"></i> <span>รายงานภาพรวม</span></a></li>
        
        <li><a href="?mod=officer"><i class="fa fa-users"></i> <span>บุคลากร</span></a></li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>