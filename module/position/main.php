<?php
    $usr_id = $_SESSION["usr_id"];
    $connect = 'connect/connect.php';
    $sql = positionQuery($connect);
?>
<div class="col-xs-12">
    <div class="box box-primary">
        <div class="box-header">
            <button class="btn btn-success" onclick="loadContent('position', 'addNewPosition', '<?= $usr_id ?>')"><i class="fa fa-sitemap"></i> เพื่ม</button>
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                            <td align="center"><b>ชื่อฝ่าย / ตำแหน่ง</b></td>
                            <td align="center"><b>วันที่เพิ่ม</b></td>
                            <td align="center"><b>แก้ไขล่าสุด</b></td>
                            <td align="center"><b>ผู้เพิ่ม</b></td>
                            <td align="center"><b>ผู้แก้ไข</b></td>
                            <td align="center"><b>แก้ไข/ลบ</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($result = mysqli_fetch_array($sql)){
                                $pon_name = str_replace("\'", "&#39;", $result['pon_name']);
                                $pon_add_date = $result['pon_add_date'];
                                $pon_edit_date = $result['pon_edit_date'];
                                $pon_id_add = $result['usr_id_add'];
                                $pon_id_edit = $result['usr_id_edit'];
                              
                                $usr_add = userData($pon_id_add, $connect);
                                $usr_add_name = str_replace("\'", "&#39;", $usr_add['usr_firstname_th']);
                                $usr_add_lastname = str_replace("\'", "&#39;", $usr_add['usr_lastname_th']);
                                
                                $usr_edit = userData($pon_id_edit, $connect);
                                $usr_edit_name = str_replace("\'", "&#39;", $usr_add['usr_firstname_th']);
                                $usr_edit_lastname = str_replace("\'", "&#39;", $usr_add['usr_lastname_th']);
                        ?>
                        <tr>
                              <td><?= $pon_name ?></td>
                              <td align="center"><?= $pon_add_date ?></td>
                              <td align="center"><?= $pon_edit_date ?></td>
                              <td><?= $usr_add_name ?> <?= $usr_add_lastname ?></td>
                              <td><?= $usr_edit_name ?> <?= $usr_edit_lastname ?></td>
                              <td align="center">
                                  <button type="button" class="btn bg-olive btn-flat margin"><i class="fa  fa-unlock"></i> เพื่มการเข้าถึง</button>
                                  <button type="button" class="btn bg-purple btn-flat margin"><i class="fa fa-edit"></i> แก้ไข</button>
                                  <button type="button" class="btn bg-maroon btn-flat margin"><i class="fa fa-remove"></i> ลบ</button>
                              </td>
                        </tr>
                        <?php
                          }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td align="center">ชื่อฝ่าย / ตำแหน่ง</td>
                            <td align="center">วันที่เพิ่ม</td>
                            <td align="center">แก้ไขล่าสุด</td>
                            <td align="center">ผู้เพิ่ม</td>
                            <td align="center">ผู้แก้ไข</td>
                        </tr>
                    </tfoot>
                </table>
                
            </div>
            <!-- /.box-body -->
    </div>
          <!-- /.box -->
</div>
<!-- /.col -->

