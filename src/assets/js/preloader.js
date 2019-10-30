/*
* Preloader js By Kajal
* */
export default function Preloader() {
    (function(){
        var s = Date.now();
        var linebar = document.getElementById("linebar");
        var preloaderOverlap = document.getElementById("preloader-overlap");
        var preloaderOverlapClose = document.getElementById("preloader-overlap-close");
        document.addEventListener("DOMContentLoaded", function(e) {
            var l = Date.now();
            var sec = l-s;
            if(sec < 5000) sec = 5000;
            linebar.style.animationDuration = sec + "ms";
            setTimeout(function() {
                document.getElementById("preloader").style.display = "none";
    
            }, sec);
        });
        preloaderOverlapClose.addEventListener("click", function(e) {
            preloaderOverlap.style.display = "none";
        });
    })();
}
