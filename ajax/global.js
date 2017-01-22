//------------------------------------------------------------------- content loading  ------------------------------------------------------
function loadContent(module, file, id){
    var URL = "module/" + module + "/" + file + ".php?id=" + id;
    var data = null;
    ajaxLoadFrw('get', URL, data, "content");
    document.getElementById('content').innerHTML = "Loading....";
    //Set timeout
    var t = 60000;
    timeoutF = setTimeout("ajaxTimeoutFrw()", t);
}
function recordDelete(module, file, id){
    var URL = "module/" + module + "/" + "action/" + file + ".php?id=" + id + "&dummy=" + Math.random();
    var data = null
    var result = confirm("คุณเเน่ใจหรือไม่ที่จะลบผู้ใช้นี้ ?");
    if(result){
        ajaxLoadFrw('get', URL, data, "content");
    }
}

    