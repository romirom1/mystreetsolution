var modal = document.getElementById('ModalKuh');

 
var img = document.getElementById("gambare-laporan");
var modalImg = document.getElementById("gambar");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

 
var span = document.getElementsByClassName("close")[0];

 
span.onclick = function() { 
    modal.style.display = "none";
}