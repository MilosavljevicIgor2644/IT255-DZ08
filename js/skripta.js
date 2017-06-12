var today = new Date();

function boja() {
    var state = false;
    setInterval(function () {
            state = !state;
            var color = (state?'red':'green');
            document.getElementById('roba').style.color = color;
        }, 1000);
}