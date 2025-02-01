<?php include('includes/header.php'); ?>

<section id="submit-contact" class="submit-contact py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-3 mb-4 animate__animated animate__fadeInUp">Contact Form</h1>
            <p class="lead text-muted animate__animated animate__fadeInUp">
                Please fill out the form below to get in touch with me. I will respond as soon as possible!
            </p>
        </div>

        <!-- Contact Form -->
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form action="submit-contact.php" method="POST" id="contactForm" class="shadow-lg rounded p-4 bg-white">
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control form-control-lg" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="font-weight-bold">Your Email</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="font-weight-bold">Your Message</label>
                        <textarea id="message" name="message" class="form-control form-control-lg" rows="6" required></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-lg mt-3">Send Message</button>
                    </div>
                </form>

                <!-- Success Message -->
                <div id="successMessage" class="alert alert-success mt-4 d-none">
                    Your message has been successfully sent! I will get back to you shortly.
                </div>

                <!-- Error Message -->
                <div id="errorMessage" class="alert alert-danger mt-4 d-none">
                    Something went wrong. Please try again later.
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/script.js"></script>
<?php include('includes/footer.php'); ?>
