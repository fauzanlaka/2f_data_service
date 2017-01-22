<?php
    $usr_id = $_GET['id'];
    include '../../function/global.php';
    $connect = '../../connect/connect.php';
    $sql = positionQuery($connect);
?>
<div class="col-xs-12">
    
    <div class="box box-primary">
        
        <div class="box-header with-border">
            
            <div class="pull-left">
                <a class="btn btn-success" href="main.php?mod=officer"><i class="fa fa-list-alt"></i> รายการ</a>
            </div>
            
            <div class="pull-right">
                <h4><i class="fa fa-user-plus"></i> เพื่มใหม่</h4>
            </div>
        
        </div>

            <!-- form start -->
            <form class="form-horizontal" name="officerForm" id="officerForm">
                
                <div class="box-body">
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">ชื่อ</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="ofr_firstname" name="ofr_firstname" placeholder="ชื่อ">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">นามสกุล</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="ofr_lastname" name="ofr_lastname" placeholder="นามสกุล">
                        </div>
                    </div>                    
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">วัน เดือน ปีเกิด</label>

                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="ofr_date_of_birth" name="ofr_date_of_birth" placeholder="Email">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">เพศ</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="ofr_gender" id="ofr_gender">
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">หมายเลขประจำตัวประชน</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="usr_id_number" name="ofr_idnumber" id="ofr_idnumber" placeholder="หมายเลขประจำตัวประชน">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">ตำแหน่ง / ฝ่าย</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="pon_id" id="pon_id">
                                <?php
                                    while($positionResult = mysqli_fetch_array($sql)){
                                        $pon_id = $positionResult['pon_id'];
                                        $pon_name = $positionResult['pon_name'];
                                ?>
                                <option value="<?= $pon_id ?>"><?= $pon_name ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">อีเมลย์</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="ofr_email" id="ofr_email" placeholder="Email">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="ofr_telephone" id="ofr_telephone" placeholder="เบอร์โทรศัพท์">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">facebook</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="ofr_facebook" id="ofr_facebook" placeholder="facebook">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Line ID</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="ofr_lineid" id="ofr_laineid" placeholder="line id">
                        </div>
                    </div>
                    
                    <input type="hidden" name="usr_id" id="usr_id" value="<?= $usr_id ?>">
                    
                    <div class="pull-right">
                        <button type="reset" class="btn btn-warning">ยกเลิก</button>
                        <a class="btn btn-primary" onclick="officerAddNewSave()">บันทึก</a>
                    </div>
                    
                    <div align="center" id="process"></div>
                
                </div>
               
            </form> 
        
    </div>
    
</div>