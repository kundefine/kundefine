export default function Cookies() {

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    function unsetCookie(cname) {
        var d = new Date();
        d.setTime(d.getTime() - 10);
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + null + ";" + expires + ";path=/";
    }
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    function isCookieSet(cname) {
        var cvalue = getCookie(cname);
        if (cvalue != "") {
            return true;
        } else {
            return false;
        }
    }
    
    function changeTheme() {
        if(isCookieSet('darkTheme')) {
            loadLightTheme();
            unsetCookie('darkTheme');
        } else {
            loadDarkTheme();
            setCookie('darkTheme', 'true');
        }
    }
    
    function loadDarkTheme() {
        darkTheme.href = "assets/css/dark.css";
        themeChange.style.left = "initial";
        themeChange.style.right = "0px";
    }
    
    function loadLightTheme() {
        darkTheme.href = "";
        themeChange.style.right = "initial";
        themeChange.style.left = "0px";
    }
    
    function loadYourNameDailog() {
        document.querySelector('.your-name').style.display = 'flex';
    }
    function closeYourNameDailog() {
        document.querySelector('.your-name').style.display = 'none';
    }
    function closeYourNameDailogLong() {
        closeYourNameDailog();
        setCookie('closeYourName', 'true', 1);
    }
    function changeUserName() {
        document.getElementById('username').innerHTML = getCookie('username');
    }
    function setUserName() {
        if(yourName.value != "") {
            setCookie('username', yourName.value, 7);
            changeUserName();
            closeYourNameDailog();
            console.log('username is set');
        } else {
            yourName.style.border = "5px solid red";
        }
    }
    
    let themeChange = document.getElementById('theme-change');
    let yourName = document.getElementById('yourName');
    let yourNameSubmit = document.getElementById('yourNameSubmit');
    let yourNameClose = document.getElementById('yourNameClose');
    let yourNameCloseLong = document.getElementById('yourNameCloseLong');
    let darkTheme = document.createElement('link');
    darkTheme.rel = 'stylesheet';
    darkTheme.id = 'darktheme';
    document.head.appendChild(darkTheme);


    themeChange.addEventListener('click', changeTheme);
    yourNameSubmit.addEventListener('click', setUserName);
    yourNameClose.addEventListener('click', closeYourNameDailog);
    yourNameCloseLong.addEventListener('click', closeYourNameDailogLong);
    
    
    if(isCookieSet('darkTheme')) {
        loadDarkTheme();
    }
    
    
    if(!isCookieSet('username') ) {
        if(!isCookieSet('closeYourName')) {
            loadYourNameDailog();
        }
    } else {
        changeUserName();
    }
}

