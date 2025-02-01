<!-- portfolio.php -->
<?php
include('includes/header.php');
include('db/db.php');
include('db/queries.php');

$projects = getAllProjects($conn);
?>

<section class="portfolio py-5">
    <div class="container">
        <h2 class="text-center mb-4">My Projects</h2>
        <div class="row">
            <?php while ($project = $projects->fetch_assoc()): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/images/<?php echo htmlspecialchars($project['image_url']); ?>" class="card-img-top" alt="Thumbnail of <?php echo htmlspecialchars($project['title']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($project['title']); ?></h5>
                            <p class="card-text"><?php echo nl2br(htmlspecialchars($project['description'])); ?></p>
                            <a href="<?php echo $project['video_url']; ?>" class="btn btn-primary" target="_blank">View Video</a>
                        </div>
                    </div>

                    <?php
                        $testimonials = getTestimonialByProject($conn, $project['id']);
                        while ($testimonial = $testimonials->fetch_assoc()):
                    ?>
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
