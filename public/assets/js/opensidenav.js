function openNav() {
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    document.getElementById("main").style.marginLeft = "76%";
    document.getElementById("mySidenav").style.width = "76%";
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("openNav").style.display = 'none';
    }else{
    document.getElementById("main").style.marginLeft = "20%";
    document.getElementById("mySidenav").style.width = "20%";
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("openNav").style.display = 'none';
    }
}

function closeNav() {
    document.getElementById("main").style.marginLeft= "0";
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("openNav").style.display = 'inline-block';
    
}