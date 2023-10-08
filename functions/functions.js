function getScreenWdith() {
    var screenWidth = window.innerWidth * 0.75; // Get the viewport width
    console.log('Numeric width of screen from front end: ' + screenWidth);

    // Send value to the server using AJAX
    $.ajax({
        url: 'scripts/getScreenWidth.php', 
        method: 'POST',
        data: { screenWidth: screenWidth }, // Send screenWidth as POST data
        success: function(response) {
            console.log('Numeric width of screen from back end: ' + response);
        }
    });
}

