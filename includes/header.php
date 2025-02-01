<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cinematography portfolio showcasing commercials, music videos, and more.">
    <meta name="author" content="Your Name">
    <meta property="og:title" content="Cinematography Portfolio">
    <meta property="og:description" content="Showcase of my cinematography work.">
    <meta property="og:image" content="assets/images/thumbnail.jpg">
    <title>Cinematography Portfolio</title>
    
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Animate.css for animations -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <!-- Header Title -->
            <h1 class="text-center animate__animated animate__fadeIn">Cinematography Portfolio</h1>

            <!-- Navigation -->
            <nav>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-white animate__animated animate__fadeIn animate__delay-1s" href="index.php">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white animate__animated animate__fadeIn animate__delay-1s" href="portfolio.php">
                            <i class="fas fa-camera"></i> Portfolio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white animate__animated animate__fadeIn animate__delay-2s" href="about.php">
                            <i class="fas fa-info-circle"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white animate__animated animate__fadeIn animate__delay-2s" href="services.php">
                            <i class="fas fa-briefcase"></i> Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white animate__animated animate__fadeIn animate__delay-3s" href="contact.php">
                            <i class="fas fa-phone-alt"></i> Contact
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
       <!-- Optional: JavaScript to apply dynamic staggered animation delay -->
       <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Apply staggered fade-in animation to header title and nav links
            const headerTitle = document.querySelector('h1');
            const navLinks = document.querySelectorAll('.nav-link');

            // Add the fadeIn animation to the header title
            headerTitle.classList.add('animate__fadeInUp');
            headerTitle.style.animationDelay = `0.2s`;

            // Add the fadeIn animation to each nav link with a staggered delay
            navLinks.forEach((link, index) => {
                link.classList.add('animate__fadeInUp');
                link.style.animationDelay = `${(index + 1) * 0.2 + 0.5}s`; // Starting delay of 0.5s
            });
        });
    </script>
