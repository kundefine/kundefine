import smoothScrollTo from './smoothscroll';
export default function SpyScroll () {

    (function() {
        'use strict';
    
    
        let toggler = document.getElementById("toggleNav");
        let bottomNav = document.getElementById("bottomNav");
        let navOverlap = document.getElementById("navOverlap");
        let link = bottomNav.querySelectorAll('ul li a');
        let navVisble = false;
    
        toggler.addEventListener('click', toggleNav);
        navOverlap.addEventListener('click', hideNav);
    
        function hideNav() {
            bottomNav.style.display = "none";
            navOverlap.style.display = "none";
            toggler.classList.remove('active');
            navVisble = false;
        }
        function toggleNav() {
            if(navVisble) {
                bottomNav.style.display = "none";
                navOverlap.style.display = "none";
                toggler.classList.remove('active');
                navVisble = false;
            } else {
                bottomNav.style.display = "flex";
                navOverlap.style.display = "flex";
                toggler.classList.add('active');
                navVisble = true;
            }
        }
    
        var section = document.querySelectorAll(".section");
        var sections = {};
        var i = 0;
        var offset = 0;
        Array.prototype.forEach.call(section, function(e) {
            sections[e.id] = e.offsetTop;
        });
    
        for(let i = 0; i < link.length; i++) {
            link[i].onclick = function(e) {
                e.preventDefault();
                let secId = e.target.href.substr(e.target.href.search('#')+1);
                let comHeadingT = document.querySelector(".commonHeadingTitle[secId='"+ secId +"']");
                let lineD = comHeadingT.querySelector('.line-design');
                comHeadingT.classList.add('commonHeadingTitle-again');
                lineD.classList.add('line-design-again');
                smoothScrollTo(sections[secId], 1000);
                setTimeout(function() {
                    lineD.classList.remove('line-design-again');
                    comHeadingT.classList.remove('commonHeadingTitle-again');
                }, 1000);
    
            }
        }
    
    
        window.onscroll = function() {
            var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
            for (i in sections) {
                if ((sections[i] - offset) <= scrollPosition ) {
                    document.querySelector('.active').setAttribute('class', 'spylink');
                    document.querySelector('a.spylink[href*=' + i + ']').setAttribute('class', 'spylink active');
                }
            }
        };
    })();
    
    
}
