<?php
include 'db/db.php';  // Include database connection file

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize form data
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $category = htmlspecialchars($_POST['category']);
    $video_url = filter_var($_POST['video_url'], FILTER_SANITIZE_URL);

    // Validate required fields
    if (empty($title) || empty($description) || empty($category)) {
        echo "Please fill in all required fields.";
        exit;
    }

    // Handle image upload (thumbnail)
    $image_path = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image'];
        $image_name = basename($image['name']);
        $image_tmp_name = $image['tmp_name'];
        $image_size = $image['size'];

        // Define allowed image types and max size (2MB max)
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $image_type = mime_content_type($image_tmp_name);

        if (in_array($image_type, $allowed_types) && $image_size <= 2 * 1024 * 1024) {
            // Generate a unique filename
            $image_path = 'uploads/' . uniqid() . '-' . $image_name;

            // Move the uploaded file to the /uploads directory
            if (!move_uploaded_file($image_tmp_name, $image_path)) {
                echo "Error uploading the image.";
                exit;
            }
        } else {
            echo "Invalid image type or file size too large.";
            exit;
        }
    }

    // Insert the project into the database
    $sql = "INSERT INTO projects (title, description, category, video_url, image_url) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssss", $title, $description, $category, $video_url, $image_path);

        if ($stmt->execute()) {
            // Redirect to portfolio page after success
            header("Location: portfolio.php");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();  // Close the database connection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Project</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Add a New Project</h1>

        <form action="insert_project.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="title" class="form-label">Project Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
                <div class="invalid-feedback">Please enter the project title.</div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
                <div class="invalid-feedback">Please provide a project description.</div>
            </div>

            <!-- Dropdown Category Selection -->
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select id="category" name="category" class="form-select" required>
                    <option value="" disabled selected>Select a category</option>
                    <option value="Commercials">Commercials</option>
                    <option value="Music Videos">Music Videos</option>
                    <option value="Short Films">Short Films</option>
                </select>
                <div class="invalid-feedback">Please specify the project category.</div>
            </div>

            <div class="mb-3">
                <label for="video_url" class="form-label">Video URL (YouTube/Vimeo)</label>
                <input type="url" id="video_url" name="video_url" class="form-control">
                <div class="invalid-feedback">Please enter a valid video URL.</div>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload Thumbnail</label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*">
                <div class="invalid-feedback">Please upload an image thumbnail.</div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add Project</button>
    </form>


    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        // Bootstrap form validation
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>
