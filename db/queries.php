<?php
// queries.php

// Get all projects
function getAllProjects($conn) {
    $sql = "SELECT * FROM projects ORDER BY created_at DESC";
    $result = $conn->query($sql);
    return $result;
}

// Get a single project by its ID
function getProjectById($conn, $project_id) {
    $sql = "SELECT * FROM projects WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $project_id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

// Get testimonials by project ID
function getTestimonialByProject($conn, $project_id) {
    $sql = "SELECT * FROM testimonials WHERE project_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $project_id);
    $stmt->execute();
    return $stmt->get_result();
}

// Get projects with pagination and category filter
function getProjectsByPage($conn, $projects_per_page, $offset, $category = 'all') {
    if ($category === 'all') {
        $sql = "SELECT * FROM projects ORDER BY created_at DESC LIMIT ? OFFSET ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $projects_per_page, $offset);
    } else {
        $sql = "SELECT * FROM projects WHERE category = ? ORDER BY created_at DESC LIMIT ? OFFSET ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sii", $category, $projects_per_page, $offset);
    }
    $stmt->execute();
    return $stmt->get_result();
}

// Get total count of projects (used for pagination)
function getTotalProjectsCount($conn, $category = 'all') {
    if ($category === 'all') {
        $sql = "SELECT COUNT(*) AS total FROM projects";
        $stmt = $conn->prepare($sql);
    } else {
        $sql = "SELECT COUNT(*) AS total FROM projects WHERE category = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $category);
    }
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc()['total'];
}
?>
