// script.js

document.addEventListener("DOMContentLoaded", () => {
    // Placeholder for any custom JS functionality

    // Form submission handling
    const contactForm = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');
    const errorMessage = document.getElementById('errorMessage');

    // Handle form submission
    if (contactForm) {
        contactForm.addEventListener('submit', (event) => {
            event.preventDefault(); // Prevent form from submitting normally

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Basic form validation
            if (name && email && message) {
                // Simulate form submission (could be replaced with an AJAX request)
                setTimeout(() => {
                    successMessage.classList.remove('d-none');
                    errorMessage.classList.add('d-none');
                    contactForm.reset(); // Reset the form fields after success
                }, 1000);
            } else {
                // Simulate an error if validation fails
                setTimeout(() => {
                    successMessage.classList.add('d-none');
                    errorMessage.classList.remove('d-none');
                }, 1000);
            }
        });
    }

    // Custom JS functionality for other parts of the site can go here
});

