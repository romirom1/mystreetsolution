var header = document.getElementById("myButton");
var btns = header.getElementsByClassName("btn-panduan");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("btn-active-panduan");
    current[0].className = current[0].className.replace(" btn-active-panduan", "");
    this.className += " btn-active-panduan";
  });
}

function tutorial() {

 document.getElementById("isine-kontent").innerHTML = "<h3>Tutorial Menggunakan Mystreet Solution</h3><p>Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar</p><p>Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar</p>";
}
function faq() {

 document.getElementById("isine-kontent").innerHTML = "<h3>FAQ ISINE FAQ</h3><p>atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar</p><p>Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar</p>";
}
function syarat() {
document.getElementById("isine-kontent").innerHTML = "<h3>Dasar-Dasar Aplikasi</h3><p>Aplikasi Android ditulis dalam bahasa pemrograman Java. Android SDK Tools mengompilasi kode Anda—bersama data dan file sumber daya—menjadi sebuah APK: sebuah paket Android, yang berupa file arsip dengan akhiran .apk. Satu file APK berisi semua materi aplikasi Android dan merupakan file yang digunakan perangkat Android untuk memasang aplikasi.</p>";
}