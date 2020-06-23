

getCountdown();

setInterval(function () { getCountdown(); }, 1000);

function getCountdown(){
    var countdown = document.getElementById("newYearTimer");
    var target_date = new  Date(2021, 0, 1); //2021 January 1 00:00:00
    var d, h, m, s;
    
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;

    d = pad(parseInt(seconds_left / 86400) );
    seconds_left = seconds_left % 86400;
    
    h = pad( parseInt(seconds_left / 3600) );
    seconds_left = seconds_left % 3600;
    
    m = pad( parseInt(seconds_left / 60) );
    s = pad( parseInt( seconds_left % 60 ) );

    countdown.innerHTML = "<p>" + d + ":" + h + ":" + m + ":" + s + "</p>";
}

function pad(n) {
    return (n < 10 ? '0' : '') + n;
}