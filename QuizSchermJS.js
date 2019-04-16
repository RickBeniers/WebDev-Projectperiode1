var timeleft = 10;
var downloadTimer = setInterval(function () {
    document.getElementById("countdown").innerHTML = timeleft;
    timeleft -= 1;
    if (timeleft <= 0) {
        clearInterval(downloadTimer);
        //volgende vraag.
        document.getElementById("countdown").innerHTML = timeleft;
    }
}, 1000);