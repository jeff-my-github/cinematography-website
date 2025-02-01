<!-- about.php -->
<?php include('includes/header.php'); ?>

<section class="about py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side: Profile Image -->
            <div class="col-md-6">
                <div class="about-image">
                    <img src="assets/images/My Picture.jpg" alt="Profile Picture" class="img-fluid rounded-circle shadow-lg">
                </div>
            </div>
            <!-- Right Side: About Text -->
            <div class="col-md-6">
                <div class="about-content">
                    <h2 class="display-4 mb-4 animate__animated animate__fadeInUp">About Me</h2>
                    <p class="lead text-muted mb-4 animate__animated animate__fadeInUp">Hello, I’m [Your Name], a cinematographer with a passion for telling stories through stunning visuals. With years of experience in commercials, music videos, and short films, I bring a unique approach to every project I work on.</p>
                    <p class="animate__animated animate__fadeInUp">
                        My journey in cinematography started [insert year/brief story], and since then, I’ve had the opportunity to work with amazing teams and clients. I specialize in creating cinematic shots, engaging narratives, and crafting visuals that leave a lasting impression. Whether it's through expert camera work, lighting design, or color grading, I bring an artistic and technical approach to every project.
                    </p>
                    <a href="portfolio.php" class="btn btn-primary btn-lg animate__animated animate__fadeInUp">Explore My Work</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="skills py-5 bg-light">
    <div class="container">
        <h3 class="text-center mb-5 animate__animated animate__fadeInUp">Skills & Expertise</h3>
        <div class="row">
            <!-- Skill 1 -->
            <div class="col-md-4">
                <div class="skill-card p-4 rounded shadow-sm text-center">
                    <i class="fas fa-camera-retro fa-3x mb-3"></i>
                    <h4>Camera Work</h4>
                    <p>Expert camera operation for storytelling through dynamic angles, movements, and compositions.</p>
                </div>
            </div>
            <!-- Skill 2 -->
            <div class="col-md-4">
                <div class="skill-card p-4 rounded shadow-sm text-center">
                    <i class="fas fa-lightbulb fa-3x mb-3"></i>
                    <h4>Lighting Design</h4>
                    <p>Creating mood, texture, and depth through custom lighting setups to enhance every scene.</p>
                </div>
            </div>
            <!-- Skill 3 -->
            <div class="col-md-4">
                <div class="skill-card p-4 rounded shadow-sm text-center">
                    <i class="fas fa-paint-brush fa-3x mb-3"></i>
                    <h4>Color Grading</h4>
                    <p>Professional color grading to enhance visual aesthetics, mood, and emotional impact.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial py-5">
    <div class="container">
        <h3 class="text-center mb-4 animate__animated animate__fadeInUp">What Others Say</h3>
        <div class="testimonial-carousel owl-carousel">
            <div class="testimonial-item">
                <blockquote class="blockquote">
                    <p class="mb-0">“An incredible cinematographer! The visuals were breathtaking, and the storytelling through camera angles was top-notch.”</p>
                    <footer class="blockquote-footer">Client Name, <cite title="Source Title">Project Title</cite></footer>
                </blockquote>
            </div>
            <div class="testimonial-item">
                <blockquote class="blockquote">
                    <p class="mb-0">“Working with [Your Name] was a game-changer. The lighting and camera work really elevated our production.”</p>
                    <footer class="blockquote-footer">Director Name, <cite title="Source Title">Film Title</cite></footer>
                </blockquote>
            </div>
            <!-- Add more testimonials as needed -->
        </div>
    </div>
</section>
<?php include('includes/footer.php'); ?>
<script>
    $(document).ready(function(){
        $(".testimonial-carousel").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true
        });
    });
</script>
