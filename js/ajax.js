// js/ajax.js
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get the form data
    var formData = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        message: document.getElementById('message').value
    };

    // Create an XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    
    // Configure it: POST to submit-contact.php
    xhr.open('POST', 'submit-contact.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json'); // Send as JSON

    // Handle the response
    xhr.onload = function() {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            var responseMessage = document.getElementById('response-message');

            if (response.success) {
                responseMessage.innerHTML = '<div class="alert alert-success">' + response.message + '</div>';
            } else {
                responseMessage.innerHTML = '<div class="alert alert-danger">' + response.message + '</div>';
            }
        } else {
            alert('Something went wrong. Please try again.');
        }
    };

    // Send the form data as JSON
    xhr.send(JSON.stringify(formData));
});
