<?php
include('view/header.php'); 
?>

<section class="assignment-container">
    <h2>Edit Assignment</h2>
    <form action="." method="post">
        <!-- Hidden Field for ID -->
        <input type="hidden" name="assignment_id" value="<?= $assignment['ID'] ?>">

        <!-- Course Dropdown -->
        <label>Course:</label>
        <select name="course_id" required>
            <?php foreach ($courses as $course) : ?>
                <option value="<?= $course['courseID'] ?>" <?= $assignment['courseID'] == $course['courseID'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($course['courseName']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <!-- Description Input -->
        <label>Description:</label>
        <input type="text" name="description" value="<?= htmlspecialchars($assignment['Description']) ?>" required>

        <button type="submit" name="action" value="update_assignment">Save Changes</button>
        <p><a href=".">Cancel</a></p>
    </form>
</section>

<?php 
include('view/footer.php');
?>