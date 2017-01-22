<?php
    session_start();
    if(!isset($_SESSION['usr_id'])){
        header("location: index.html");
    }else{
        $usr_id = $_SESSION['usr_id'];
        include 'function/global.php';
        $connect = 'connect/connect.php';
        $num = userCount($connect);
        /*
        $fname = str_replace("\'", "&#39;", $result["name"]);
        $lname = str_replace("\'", "&#39;", $result["lastname"]);
        $code = $result['code'];
         * 
         */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PI DC| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php
          include 'topMenu.php';
          include 'sidebarMenu.php';
    ?>
    <!-- Left side column. contains the logo and sidebar -->
  

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" id="contentHeader">
            <?php
                include 'function/contentHeader.php';
                if(isset($_GET['mod'])){
                        $mod = $_GET['mod'];
                    }else{
                        $mod = "overview";
                    }

                    switch ($mod){
                        case 'overview':
                            $contentHeader = contentHeader('overview');
                            echo $contentHeader;
                            break;
                        case 'officer':
                            $contentHeader = contentHeader('officer');
                            echo $contentHeader;
                            break;
                        case 'position':
                            $contentHeader = contentHeader('position');
                            echo $contentHeader;
                            break;
                        case 'user':
                            $contentHeader = contentHeader('user');
                            echo $contentHeader;
                            break;
                    }
            ?>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Small boxes (Stat box) -->
            <div class="row" id="content">

                <?php

                    if(isset($_GET['mod'])){
                        $mod = $_GET['mod'];
                    }else{
                        $mod = "overview";
                    }

                    switch ($mod){
                        case 'overview':
                            include 'module/overview/main.php';
                            break;
                        case 'officer':
                            include 'module/officer/main.php';
                            break;
                        case 'position':
                            include 'module/position/main.php';
                            break;
                    }

                ?>

            </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>พัฒนาระบบโดย PI Development Team.</strong>
    </footer>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<!-- Ajax -->
<script type="text/javascript" src="ajax/framework.js"></script>
<script type="text/javascript" src="ajax/login.js"></script>
<script type="text/javascript" src="ajax/global.js"></script>
<script type="text/javascript" src="ajax/private.js"></script>
</body>
</html>
<?php
    }
?>