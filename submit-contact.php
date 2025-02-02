<?php
// submit-contact.php
include('includes/header.php');
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
                'message' => 'Your message has been successfully sent. I\'ll get back to you shortly.'
            );
        } else {
            // Error response
            $response = array(
                'success' => false,
                'message' => 'There was an error sending your message. Please try again later.'
            );
        }

        // Return JSON response
        echo json_encode($response);
        exit;
    } else {
        // Invalid data response
        echo json_encode(array('success' => false, 'message' => 'All fields are required.'));
        exit;
    }
}

?>

<div class="container my-5">
    <h2>Contact Me</h2>
    <form id="contact-form" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>

    <div id="response-message" class="mt-3"></div>
</div>
<!-- Include the AJAX script -->
<script src="js/ajax.js"></script>
<?php include('includes/footer.php'); ?>
