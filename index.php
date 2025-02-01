<?php require_once 'includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="hero text-white text-center py-5" style="background-image: url('assets/images/hero-bg.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h1 class="display-4 hero-title animated fadeInUp">Welcome to My Cinematography Portfolio</h1>
                    <p class="lead hero-description animated fadeInUp">Explore my work and get in touch!</p>
                    <a href="portfolio.php" class="btn btn-light btn-lg hero-btn mt-3 animated fadeInUp">View Portfolio</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section class="featured-projects py-5">
        <div class="container">
            <h2 class="text-center mb-4 animated fadeInUp">Featured Projects</h2>
            <div class="row">
                <!-- Project 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg rounded animated fadeInUp">
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
                    <div class="card shadow-lg rounded animated fadeInUp">
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
                    <div class="card shadow-lg rounded animated fadeInUp">
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
            <h2 class="text-center mb-4 animated fadeInUp">Services I Offer</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card text-center p-4 shadow-lg rounded animated fadeInUp">
                        <i class="fas fa-camera-retro fa-3x mb-3"></i>
                        <h4>Camera Work</h4>
                        <p>Expert camera operation and visual storytelling to bring your vision to life.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center p-4 shadow-lg rounded animated fadeInUp">
                        <i class="fas fa-lightbulb fa-3x mb-3"></i>
                        <h4>Lighting Design</h4>
                        <p>Custom lighting setups designed to enhance the mood and aesthetics of your project.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center p-4 shadow-lg rounded animated fadeInUp">
                        <i class="fas fa-paint-brush fa-3x mb-3"></i>
                        <h4>Color Grading</h4>
                        <p>Professional color grading to elevate the look and feel of your footage.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta bg-dark text-white text-center py-5 rounded-top" style="background-image: url('assets/images/cta-bg.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <h3 class="display-4 animated fadeInUp">Ready to take your project to the next level?</h3>
            <p class="lead animated fadeInUp">Contact me today and let's bring your vision to life!</p>
            <a href="contact.php" class="btn btn-light btn-lg animated fadeInUp">Get in Touch</a>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>
