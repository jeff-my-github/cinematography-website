document.addEventListener('DOMContentLoaded', function() {
    // Select the form and response message container
    const form = document.getElementById('contact-form');
    const responseMessage = document.getElementById('response-message');

    // Listen for form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting the traditional way

        // Get form data
        const formData = new FormData(form);

        // Disable the submit button to prevent multiple submissions
        const submitButton = form.querySelector('button[type="submit"]');
        submitButton.disabled = true;
        submitButton.innerText = "Sending...";

        // Create AJAX request
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'submit-contact.php', true);

        // Listen for response from the server
        xhr.onload = function() {
            submitButton.disabled = false;
            submitButton.innerText = "Send Message";

            if (xhr.status === 200) {
                try {
                    const response = JSON.parse(xhr.responseText);

                    // Check if the response is successful
                    if (response.success) {
                        responseMessage.style.color = 'green';
                        responseMessage.innerHTML = response.message;

                        // Clear form fields
                        form.reset();

                        // Optionally clear the message after a few seconds
                        setTimeout(function() {
                            responseMessage.innerHTML = '';
                        }, 5000); // Clear after 5 seconds
                    } else {
                        responseMessage.style.color = 'red';
                        responseMessage.innerHTML = response.message;
                    }
                } catch (e) {
                    responseMessage.style.color = 'red';
                    responseMessage.innerHTML = 'Invalid JSON response';
                    console.error('Invalid JSON response', e);
                }
            } else {
                responseMessage.style.color = 'red';
                responseMessage.innerHTML = 'Something went wrong. Please try again later.';
            }
        };

        // Prepare data as JSON
        const data = {
            name: formData.get('name'),
            email: formData.get('email'),
            message: formData.get('message')
        };

        // Send the data as JSON
        xhr.send(JSON.stringify(data));
    });
});
