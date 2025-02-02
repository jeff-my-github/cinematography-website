<?php
// process-contact.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('db/db.php'); // Include the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['name']) && isset($data['email']) && isset($data['message'])) {
        $name = $conn->real_escape_string($data['name']);
        $email = $conn->real_escape_string($data['email']);
        $message = $conn->real_escape_string($data['message']);

        $query = "INSERT INTO contact_submissions (name, email, message) VALUES ('$name', '$email', '$message')";
        
        if ($conn->query($query)) {
            $response = array(
                'success' => true,
                'message' => 'Thank you for reaching out! Your message has been successfully sent. We\'ll get back to you shortly.'
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'There was an error sending your message. Please try again later.'
            );
        }

        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    } else {
        header('Content-Type: application/json');
        echo json_encode(array('success' => false, 'message' => 'All fields are required.'));
        exit;
    }
}
?>
