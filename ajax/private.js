//---------------------------------------------position--------------------------------------------------------------------------
function positionAddNewSave(content, file, form){
    if(document.getElementById('pon_name').value==""){
        document.getElementById('pon_name').focus();
    }else{
        var URL = "module/" + content + "/action/" + file + ".php?dummy=" + Math.random();
        var data = getFrmData(form);
        document.getElementById('process').innerHTML = "Processing....";
        ajaxLoadFrw('post', URL, data, "content");
    }
}

//---------------------------------------------officer---------------------------------------------------------------------------
function officerAddNewSave(){
    var URL = "module/officer/action/addNewOfficer.php?dummy=" + Math.random();
    var data = getFrmData("officerForm");
    document.getElementById('process').innerHTML = "Processing....";
    ajaxLoadFrw('post', URL, data, "content");
}