<!-- portfolio.php -->
<?php
include('includes/header.php');
include('db/db.php');
include('db/queries.php');

$projects = getAllProjects($conn);
?>

<section class="portfolio py-5">
    <div class="container">
        <h2 class="text-center mb-4 animate__animated animate__fadeInUp">My Projects</h2>

        <!-- Filter buttons to categorize projects -->
        <div class="text-center mb-4">
            <button class="btn btn-outline-primary filter-btn" data-category="all">All Projects</button>
            <button class="btn btn-outline-primary filter-btn" data-category="Commercials">Commercials</button>
            <button class="btn btn-outline-primary filter-btn" data-category="Music Videos">Music Videos</button>
            <button class="btn btn-outline-primary filter-btn" data-category="Short Films">Short Films</button>
        </div>

        <!-- Portfolio Projects Grid -->
        <div class="row" id="projectContainer">
            <?php while ($project = $projects->fetch_assoc()): ?>
                <div class="col-md-4 mb-4 project-card animate__animated" data-category="<?php echo $project['category']; ?>" style="display: none;"> <!-- Initially hide all projects -->
                    <div class="card shadow-sm rounded-lg">
                        <!-- Thumbnail image that opens modal -->
                        <img src="<?php echo '/cinematography-portfolio/' . htmlspecialchars($project['image_url']); ?>" class="card-img-top" alt="Thumbnail of <?php echo htmlspecialchars($project['title']); ?>" data-bs-toggle="modal" data-bs-target="#imageModal<?php echo $project['id']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($project['title']); ?></h5>
                            <p class="card-text"><?php echo nl2br(htmlspecialchars($project['description'])); ?></p>
                            <a href="<?php echo $project['video_url']; ?>" class="btn btn-primary" target="_blank">View Video</a>
                        </div>
                    </div>

                    <!-- Modal for displaying image in large view -->
                    <div class="modal fade" id="imageModal<?php echo $project['id']; ?>" tabindex="-1" aria-labelledby="imageModalLabel<?php echo $project['id']; ?>" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imageModalLabel<?php echo $project['id']; ?>"><?php echo htmlspecialchars($project['title']); ?> Image</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo '/cinematography-portfolio/' . htmlspecialchars($project['image_url']); ?>" class="img-fluid rounded" alt="Large image of <?php echo htmlspecialchars($project['title']); ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        // Display testimonials for each project
                        $testimonials = getTestimonialByProject($conn, $project['id']);
                        while ($testimonial = $testimonials->fetch_assoc()): ?>
                            <div class="testimonial mt-3">
                                <blockquote class="blockquote">
                                    <p class="mb-0"><?php echo nl2br(htmlspecialchars($testimonial['message'])); ?></p>
                                    <footer class="blockquote-footer"><?php echo htmlspecialchars($testimonial['name']); ?>, <cite title="Source Title"><?php echo htmlspecialchars($testimonial['title']); ?></cite></footer>
                                </blockquote>
                            </div>
                        <?php endwhile; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php
include('includes/footer.php');
?>

<script>
    // JavaScript for Filtering Projects
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projects = document.querySelectorAll('.project-card');

    // Function to add animation after a delay for each project card
    const applyAnimation = (visibleProjects) => {
        visibleProjects.forEach((project, index) => {
            setTimeout(() => {
                project.classList.add('animate__fadeInUp'); // Add staggered animation
                project.style.display = 'block'; // Make project visible
            }, index * 300); // Stagger animation delay for each card
        });
    };

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');

            // Toggle active class for the selected filter
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            // Show or hide projects based on the selected category
            let visibleProjects = [];
            projects.forEach((project) => {
                if (category === 'all' || project.getAttribute('data-category') === category) {
                    visibleProjects.push(project);
                    project.classList.remove('animate__animated', 'animate__fadeInUp'); // Reset animation
                    project.classList.add('animate__animated'); // Ensure base animation class is present
                } else {
                    project.style.display = 'none'; // Hide non-matching projects
                }
            });

            // Apply staggered fadeIn animation
            applyAnimation(visibleProjects);
        });
    });

    // Initial animation when the page loads
    window.addEventListener('load', () => {
        const allProjects = document.querySelectorAll('.project-card');
        applyAnimation(allProjects); // Apply the animation when the page is loaded
    });
</script>





