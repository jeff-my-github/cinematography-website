<?php
// queries.php

function getAllProjects($conn) {
    $sql = "SELECT * FROM projects ORDER BY created_at DESC";
    $result = $conn->query($sql);
    return $result;
}

function getTestimonialByProject($conn, $project_id) {
    $sql = "SELECT * FROM testimonials WHERE project_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $project_id);
    $stmt->execute();
    return $stmt->get_result();
}
?>
