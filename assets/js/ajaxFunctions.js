let ajaxFunction = {
    init: function () {
        console.log("test");
    },
    ajaxstartTime: function () {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
       
        m = (m < 10 ? '0' + m : m);
        s = (s < 10 ? '0' + s : s);
        document.getElementById('w3time').innerHTML = h + ":" + m + ":" + s;
        
    
       
        setTimeout("ajaxFunction.ajaxstartTime();", 500);
    }
};