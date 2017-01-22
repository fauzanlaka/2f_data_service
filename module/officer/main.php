<?php
    $usr_id = $_SESSION["usr_id"];
    $connect = 'connect/connect.php';
    //$sql = positionData($connect);
    $sqlOfficer = officerQuery($connect);
?>
<div class="col-xs-12">
    <div class="box box-primary">
        <div class="box-header">
            <button class="btn btn-success" onclick="loadContent('officer', 'addNewOfficer', '<?= $usr_id ?>')"><i class="fa fa-user-plus"></i> เพื่ม</button>
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped table-hover table-responsive"">
                    <thead>
                        <tr>
                            <td align="center"><b>ชื่อ นามสกุล</b></td>
                            <td align="center"><b>เบอร์โทรศัพท์</b></td>
                            <td align="center"><b>วัน เดือน ปีเกิด</b></td>
                            <td align="center"><b>อายุ</b></td>
                            <td align="center"><b>ตำแหน่ง/ฝ่าย</b></td>
                            <td align="center"><b>ผู้เพิ่ม</b></td>
                            <td align="center"><b>แก้ไข / ลบ</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($sqlOfficerResult = mysqli_fetch_array($sqlOfficer)){
                                $ofr_id = $sqlOfficerResult['ofr_id'];
                                $ofr_firstname = str_replace("\'", "&#39;", $sqlOfficerResult['ofr_firstname']);
                                $ofr_lastname = str_replace("\'", "&#39;", $sqlOfficerResult['ofr_lastname']);
                                $ofr_date_of_birth = $sqlOfficerResult['ofr_date_of_birth'];
                                $ofr_telephone = str_replace("\'", "&#39;", $sqlOfficerResult['ofr_telephone']);
                                $pon_id = $sqlOfficerResult['pon_id'];
                                $usr_id = $sqlOfficerResult['usr_id'];
                                
                                $position = positionData($connect, $pon_id);
                                $pon_name = str_replace("\'", "&#39;", $position['pon_name']);
                                
                                $user = userData($usr_id, $connect);
                                $usr_firstname_th = $user['usr_firstname_th'];
                                $usr_lastname_th = $user['usr_lastname_th'];
                                
                        ?>
                        <tr>
                            <td><?= $ofr_firstname ?> <?= $ofr_lastname ?></td>
                            <td align="center"><?= $ofr_telephone ?></td>
                            <td align="center"><?= $ofr_date_of_birth ?></td>
                            <td align="center"><?= date('Y-m-d') - $ofr_date_of_birth ?></td>
                            <td align="center"><?= $pon_name ?></td>
                            <td align="center"><?= $usr_firstname_th ?> <?= $usr_lastname_th ?></td>
                            <td align="center">
                                <button type="button" class="btn bg-purple btn-flat margin"><i class="fa fa-edit"></i> แก้ไข</button>
                                <button type="button" class="btn bg-maroon btn-flat margin" onclick="recordDelete('officer', 'officerDelete', '<?= $ofr_id ?>')"><i class="fa fa-remove"></i> ลบ</button>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td align="center"><b>ชื่อ นามสกุล</b></td>
                            <td align="center"><b>เบอร์โทรศัพท์</b></td>
                            <td align="center"><b>วัน เดือน ปีเกิด</b></td>
                            <td align="center"><b>อายุ</b></td>
                            <td align="center"><b>ตำแหน่ง/ฝ่าย</b></td>
                            <td align="center"><b>ผู้เพิ่ม</b></td>
                            <td align="center"><b>แก้ไข / ลบ</b></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
    </div>
          <!-- /.box -->
</div>
<!-- /.col -->

