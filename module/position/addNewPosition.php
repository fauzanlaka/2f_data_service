<?php
    $usr_id = $_GET['id'];
    //echo $usr_id;
?>
<div class="col-xs-12">
    
    <div class="box box-primary">
        
        <div class="box-header with-border">
            
            <div class="pull-left">
                <a class="btn btn-success" href="main.php?mod=position"><i class="fa fa-list-alt"></i> รายการ</a>
            </div>
            
            <div class="pull-right">
                <h4><i class="fa fa-sitemap"></i> เพื่มตำแหน่ง/ฝ่ายใหม่</h4>
            </div>
        
        </div>

            <!-- form start -->
            <form class="form-horizontal" name="positionForm" id="positionForm">
                
                <div class="box-body">
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">ชื่อตำแหน่ง/ฝ่าย</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="pon_name" name="pon_name" placeholder="ชื่อตำแหน่ง/ฝ่าย">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">รายละเอียด</label>
                        <div class="col-sm-7">
                            <textarea id="pon_name" name="pon_detail" id="pon_detail" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    
                    <input type="hidden" name="usr_id" id="usr_id" value="<?= $usr_id ?>">
                                        
                    <button type="reset" class="btn btn-warning">ยกเลิก</button>
                    <a class="btn btn-primary" onclick="positionAddNewSave('position', 'addNewPosition' , 'positionForm')">บันทึก</a>
                    
                    <div align='center' id="process"></div>
                    
                </div>
               
            </form> 
        
    </div>
    
</div>