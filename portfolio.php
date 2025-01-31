<?php
// portfolio.php
include('includes/header.php');
include('db/db.php');
include('db/queries.php');

$projects = getAllProjects($conn);
?>

<section class="portfolio">
    <h2>My Projects</h2>
    <div class="projects-list">
        <?php while ($project = $projects->fetch_assoc()): ?>
            <div class="project-item">
                <h3><?php echo $project['title']; ?></h3>
                <p><?php echo $project['description']; ?></p>
                <a href="<?php echo $project['video_url']; ?>" target="_blank">View Video</a>
                <img src="assets/images/<?php echo $project['image_url']; ?>" alt="Project Thumbnail">
                
                <?php
                    $testimonials = getTestimonialByProject($conn, $project['id']);
                    while ($testimonial = $testimonials->fetch_assoc()):
                ?>
                    <div class="testimonial">
                        <p><strong><?php echo $testimonial['name']; ?> (<?php echo $testimonial['title']; ?>):</strong></p>
                        <p><?php echo $testimonial['message']; ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php
include('includes/footer.php');
?>
