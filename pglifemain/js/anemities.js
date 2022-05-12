window.addEventListener("load", function() {

    // code for the sign-form for admin page
    var form = document.getElementById("form");
    form.addEventListener("submit", function(event) {
        var XHR = new XMLHttpRequest();
        var data = new FormData(form);

        // On success
        XHR.addEventListener("load", submit_success);

        // On error
        XHR.addEventListener("error", on_error);

        // Set up request
        XHR.open("POST", "api/anemities.php");

        // Form data is sent with request
        XHR.send(data);

        document.getElementById("loading").style.display = 'block';
        event.preventDefault();
    });




});

var submit_success = function(event) {
    document.getElementById("loading").style.display = 'none';

    var response = JSON.parse(event.target.responseText);
    if (response.success) {
        alert(response.message);
        window.location.href = "admin.php";
    } else {
        alert(response.message);
    }
};


var on_error = function(event) {
    document.getElementById("loading").style.display = 'none';

    alert('Oops! Something went wrong.');
};