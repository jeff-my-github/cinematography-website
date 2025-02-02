

<?php
// submit-contact.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('db/db.php'); // Include the database connection

// Check if the request is AJAX and method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST data
    $data = json_decode(file_get_contents('php://input'), true);

    // Check if data is valid
    if (isset($data['name']) && isset($data['email']) && isset($data['message'])) {
        // Prepare data
        $name = $conn->real_escape_string($data['name']);
        $email = $conn->real_escape_string($data['email']);
        $message = $conn->real_escape_string($data['message']);

        // Insert data into contact_submissions table
        $query = "INSERT INTO contact_submissions (name, email, message) VALUES ('$name', '$email', '$message')";
        
        if ($conn->query($query)) {
            // Success response
            $response = array(
                'success' => true,
                'message' => 'Thank you for reaching out! Your message has been successfully sent. We\'ll get back to you shortly.'
            );
        } else {
            // Error response
            $response = array(
                'success' => false,
                'message' => 'There was an error sending your message. Please try again later.'
            );
        }

        // Set the content type to JSON
        header('Content-Type: application/json');

        // Return JSON response
        echo json_encode($response);
        exit;
    } else {
        // Invalid data response
        header('Content-Type: application/json');
        echo json_encode(array('success' => false, 'message' => 'All fields are required.'));
        exit;
    }
}

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

