<!-- contact.php -->
<?php include('includes/header.php'); ?>
<section class="contact py-5">
    <div class="container">
        <h2 class="text-center mb-4">Contact Me</h2>
        <form action="submit-contact.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" id="message" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>

        <!-- Social Media Links Section -->
        <div class="social-media-links text-center mt-5">
            <h4>Connect with Me</h4>
            <!-- Facebook Icon Link -->
            <a href="https://www.facebook.com/YOUR_PROFILE_ID" target="_blank" aria-label="Visit my Facebook page">
                <img src="assets/images/social-icons/facebook.png" alt="Facebook" class="social-icon mx-3">
            </a>
            <!-- YouTube Icon Link -->
            <a href="https://www.youtube.com/channel/YOUR_CHANNEL_ID" target="_blank" aria-label="Visit my YouTube channel">
                <img src="assets/images/social-icons/youtube.png" alt="YouTube" class="social-icon mx-3">
            </a>
            <!-- Instagram Icon Link -->
            <a href="https://www.instagram.com/YOUR_PROFILE_ID" target="_blank" aria-label="Visit my Instagram page">
                <img src="assets/images/social-icons/instagram.png" alt="Instagram" class="social-icon mx-3">
            </a>
        </div>

    </div>
</section>
<?php include('includes/footer.php'); ?>
