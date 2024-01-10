var isfadingout = false;
var backlocked = true;
var alreadydisplayed = false;

// when the fade button is clicked
function fadeout(timelength) {
    isfadingout = true;
    const element = document.getElementById('fade-overlay');
    var op = 0.1;  // initial opacity
    element.style.opacity = 0;
    element.style.filter = 'alpha(opacity=' + op * 100 + ")";
    var timer = setInterval(function () {
        if (op >= 1){
            clearInterval(timer);
            isfadingout = false;
            alreadydisplayed = false;
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op += 0.01;
    }, timelength);
}

function gobackwithfade(timelength) {
    const element = document.getElementById('fade-overlay');
    const scrollelement = document.getElementById('fade-overlay');
    isfadingout = true;
    var op = 0.1;  // initial opacity
    element.style.opacity = 0;
    element.style.filter = 'alpha(opacity=' + op * 100 + ")";
    var timer = setInterval(function () {
        if (op >= 1){
            clearInterval(timer);
            isfadingout = false;
            backlocked = false;
            alreadydisplayed = false;
            //window.location.href = document.referrer;
            history.back();
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op += 0.01;
    }, timelength);
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

        function fadein(timelength, interval) {
            const element = document.getElementById('fade-overlay');
            var op = 1;  // initial opacity
            var timer = setInterval(function () {
                if (!isfadingout) {
                    if (op <= 0){
                        clearInterval(timer);
                        alreadydisplayed = true;
                    }
                    element.style.opacity = op;
                    element.style.filter = 'alpha(opacity=' + op * 100 + ")";
                    op -= interval;
                }
            }, timelength);
        }

