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
    </div>
</section>
<?php include('includes/footer.php'); ?>
