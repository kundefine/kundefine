/*
* SmoothScroll by Kajal
* */
export default function smoothScrollTo(scrollPosition, duration) {
    var targetPosition = scrollPosition;
    var startPosition = window.pageYOffset;
    var distance = targetPosition - startPosition;
    var startTime = null;
    function animation(currentTime) {
        if(startTime === null) startTime = currentTime;
        var timeElapsed = currentTime - startTime;
        var run = easeEffects(timeElapsed, startPosition, distance, duration);
        window.scrollTo(0, run + 1);
        if(timeElapsed < duration) requestAnimationFrame(animation);
    }
    function easeEffects(t, b, c, d) {
        t /= d/2;
        if (t < 1) return c/2*t*t*t*t + b;
        t -= 2;
        return -c/2 * (t*t*t*t - 2) + b;
    }
    requestAnimationFrame(animation);
}

