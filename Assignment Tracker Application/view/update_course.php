<?php 
include('view/header.php');
?>

<main>
    <h2>Edit Course</h2>
    <form action="." method="post">
        <input type="hidden" name="action" value="update_course">
        
        <!-- Course ID (Hidden Field) -->
        <input type="hidden" name="course_id" value="<?= $course['courseID'] ?>">

        <!-- Course Name (Text Input) -->
        <label>Course Name:</label>
        <input type="text" name="course_name" 
               value="<?= htmlspecialchars($course['courseName']) ?>" required>
        
        <button type="submit">Update Course</button>
    </form>
    <p><a href=".?action=list_courses">Back to Course List</a></p>
</main>

<?php
include('view/footer.php');
?>