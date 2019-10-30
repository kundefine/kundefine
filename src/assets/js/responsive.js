export default function Resposive () {
    var resFeedback = document.createElement("DIV");
    resFeedback.classList.add('resFeedback');
    var body = document.querySelector('body');
    resFeedback.innerHTML = "width: " + window.innerWidth + "px height: " + window.innerHeight + "px";
    body.appendChild(resFeedback);
    
    window.onresize = function() {
        resFeedback.innerHTML = "width: " + window.innerWidth + "px height: " + window.innerHeight + "px";
    };
}
