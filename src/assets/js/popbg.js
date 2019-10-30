export default function PopBg() {
    let element = document.querySelectorAll('.thumbnail');
    for(let i = 0; i < element.length; i++) {
        element[i].onclick = function(e) {
            let src = e.target.style.backgroundImage;
            let realSrc = src.slice(4, -1).replace(/"/g, "");
            let popContainer = document.createElement('DIV');
            let popContainerClose = document.createElement('DIV');
            popContainerClose.innerHTML = "Close";
            popContainer.classList.add('popContainer');
            popContainerClose.classList.add('popContainerClose');
            let img = new Image();
            img.src = realSrc;
            img.classList.add('popbg');
            popContainer.appendChild(img);
            popContainer.appendChild(popContainerClose);
            document.body.appendChild(popContainer);

            popContainer = document.querySelector('.popContainer');
            popContainerClose = document.querySelector('.popContainerClose');
            popContainer.onclick = function() {
                document.body.removeChild(this);
            }
        }
    }
    
    
}