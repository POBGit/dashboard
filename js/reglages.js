(function(){
    var btnMdpMysql = document.getElementById("btnMdpMysql");

    btnMdpMysql.addEventListener("click", function(){
        var txtMdpMySql = document.getElementById("sMotDePasseMysql");

        if(btnMdpMysql.getAttribute("data-see") === "true"){
            txtMdpMySql.type = "password";
            btnMdpMysql.setAttribute("data-see", "false");
        }
        else{
            txtMdpMySql.type = "text";
            btnMdpMysql.setAttribute("data-see", "true");
        }
    })
})();