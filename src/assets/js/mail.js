export default function Mail() {

    let sendMail = document.getElementById('sendMail');

    sendMail.onclick = function() {
        const mailTo = 'mail@kundefine.com';
        let mailerNameInput = document.getElementById('mailerName');
        let mailerName = document.getElementById('mailerName').value;
        let mailerMessageText = document.getElementById('mailerMessage');
        let mailerMessage = document.getElementById('mailerMessage').value;

        seedMail(mailTo, mailerName, mailerMessage);
        


        function seedMail(mailTo, mailerName, mailerMessage) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if(this.responseText === "1") {
                        document.querySelector('.success').style.display = 'block';
                        setTimeout(() => {
                                document.querySelector('.success').style.display = 'none';
                        }, 5000);
                        mailerNameInput.value = '';
                        mailerMessageText.value = '';
                    }
                }
            };
            xhttp.open("post", "mail.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            if(mailerName.trim() !== '' && mailerMessage.trim() !== '') {
                xhttp.send(`mailTo=${mailTo}&mailerName=${mailerName}&mailerMessage=${mailerMessage}`);
                
            } else {
                document.querySelector('.error').style.display = 'block';
                setTimeout(() => {
                        document.querySelector('.error').style.display = 'none';
                }, 5000);
            }
        }
    }

}