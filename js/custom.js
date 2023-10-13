$('#form').submit(function() {
    document.getElementById("submit-booking").innerHTML = "Please Wait..."
    showLoader();
    $.ajax({
        data: $(this).serialize(),
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        success: function(data) {
            showToaster()
            document.getElementById("submit-booking").innerHTML = "Submit"
            hideLoader();
        }
    });
    return false;
});

// Function to show the loader
function showLoader() {
    loader.style.display = 'inline-block';
}

// Function to hide the loader
function hideLoader() {
    loader.style.display = 'none';
}

function showToaster() {
    // Get the toaster element
    var toaster = document.getElementById("toaster");

    // Show the toaster
    toaster.style.display = "block";

    // Hide the toaster after 3 seconds (3000 milliseconds)
    setTimeout(function() {
        toaster.style.display = "none";
    }, 3000);
}

var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
(function () {
    var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/651ab69ce6bed319d004f3cc/1hbo5iljj';
    s1.charset = 'UTF-8';
    // s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();