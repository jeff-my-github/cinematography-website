<?php require_once 'includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="hero bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-3">Welcome to My Cinematography Portfolio</h1>
            <p class="lead">Explore my work and get in touch!</p>
            <a href="portfolio.php" class="btn btn-light btn-lg mt-3">View Portfolio</a>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section class="featured-projects py-5">
        <div class="container">
            <h2 class="text-center mb-4">Featured Projects</h2>
            <div class="row">
                <!-- Project 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/images/project1.jpg" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">Project 1</h5>
                            <p class="card-text">A stunning music video showcasing cinematic shots and storytelling.</p>
                            <a href="portfolio.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/images/project2.jpg" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Project 2</h5>
                            <p class="card-text">A captivating commercial project for a well-known brand.</p>
                            <a href="portfolio.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/images/project3.jpg" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Project 3</h5>
                            <p class="card-text">An exciting short film with innovative camera work and lighting design.</p>
                            <a href="portfolio.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Services I Offer</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <h4>Camera Work</h4>
                        <p>Expert camera operation and visual storytelling to bring your vision to life.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <h4>Lighting Design</h4>
                        <p>Custom lighting setups designed to enhance the mood and aesthetics of your project.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <h4>Color Grading</h4>
                        <p>Professional color grading to elevate the look and feel of your footage.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta bg-dark text-white text-center py-5">
        <div class="container">
            <h3 class="display-4">Ready to take your project to the next level?</h3>
            <p class="lead">Contact me today and let's bring your vision to life!</p>
            <a href="contact.php" class="btn btn-light btn-lg">Get in Touch</a>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>
