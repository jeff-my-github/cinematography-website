<?php 
// submit-contact.php
include('includes/header.php'); // Include header
?>




<div class="container" style="max-width: 550px; margin: 50px auto; background-color: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
    <h2 style="text-align: center; font-size: 32px; font-weight: 600; color: #333; margin-bottom: 30px;">Contact Me</h2>
    <form id="contact-form" method="POST">
        <div class="mb-3" style="margin-bottom: 25px;">
            <label for="name" class="form-label" style="font-size: 16px; font-weight: 500; color: #333;">Name</label>
            <input type="text" class="form-control" id="name" name="name" required 
                   style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 8px; font-size: 16px; color: #333; background-color: #f8f8f8;">
        </div>
        <div class="mb-3" style="margin-bottom: 25px;">
            <label for="email" class="form-label" style="font-size: 16px; font-weight: 500; color: #333;">Email</label>
            <input type="email" class="form-control" id="email" name="email" required 
                   style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 8px; font-size: 16px; color: #333; background-color: #f8f8f8;">
        </div>
        <div class="mb-3" style="margin-bottom: 25px;">
            <label for="message" class="form-label" style="font-size: 16px; font-weight: 500; color: #333;">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" required 
                      style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 8px; font-size: 16px; color: #333; background-color: #f8f8f8;"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" 
                style="width: 100%; padding: 16px; background-color: #3498db; color: white; border: none; border-radius: 8px; font-size: 18px; cursor: pointer; transition: background-color 0.3s ease;">
            Send Message
        </button>
    </form>

    <div id="response-message" class="mt-3" style="text-align: center; margin-top: 20px;"></div>
</div>

<script src="js/ajax.js"></script>

<?php
include('includes/footer.php'); // Include footer
?>
