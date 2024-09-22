function populateElementById(divId, contentFilePath) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(divId).innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", contentFilePath, true);
    xhttp.send();
}

function loadHome() {
    populateElementById("display", "/php/pages/home.php")
}

function loadNewLogForm() {
    populateElementById("display", "/php/pages/newlog.php");
}