function openNav() {
    document.getElementById("main").style.marginLeft = "20%";
    document.getElementById("mySidenav").style.width = "20%";
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("openNav").style.display = 'none';
}

function closeNav() {
    document.getElementById("main").style.marginLeft= "0";
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("openNav").style.display = 'inline-block';
    
}