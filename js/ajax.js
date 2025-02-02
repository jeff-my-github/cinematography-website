document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const responseMessage = document.getElementById('response-message');

    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting traditionally

        // Get form data
        const formData = new FormData(form);

        // Disable submit button to prevent multiple submissions
        const submitButton = form.querySelector('button[type="submit"]');
        submitButton.disabled = true;
        submitButton.innerText = "Sending...";

        // Send the form data via fetch as JSON to process-contact.php
        fetch('process-contact.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',  // Important: set header to send JSON
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({
                name: formData.get('name'),
                email: formData.get('email'),
                message: formData.get('message')
            })
        })
        .then(response => response.json()) // Parse the response as JSON
        .then(data => {
            submitButton.disabled = false;
            submitButton.innerText = "Send Message";

            if (data.success) {
                // Show success message
                responseMessage.style.color = 'green';
                responseMessage.innerHTML = data.message;

                // Clear form fields
                form.reset();

                // Optionally clear the message after 5 seconds
                setTimeout(() => {
                    responseMessage.innerHTML = '';
                }, 5000);
            } else {
                // Show error message
                responseMessage.style.color = 'red';
                responseMessage.innerHTML = data.message;
            }
        })
        .catch(error => {
            submitButton.disabled = false;
            submitButton.innerText = "Send Message";
            responseMessage.style.color = 'red';
            responseMessage.innerHTML = 'Something went wrong. Please try again later.';
            console.error('Error:', error);
        });
    });
});
