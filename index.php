<?php
?>
<html>
    <head>
        <title>Generate Certificate</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>
        <h1>Generate Certificate</h1>
        <div class="container">
            <form method="POST" action="certificate.php">
                <label for="student_name">Student Name</label>
                <input type="text" id="student_name" name="student_name" placeholder="Student Name">

                <label for="course_name">Course Name</label>
                <input type="text" id="course_name" name="course_name" placeholder="Course Name">

                <label for="certification_name">Course Name</label>
                <input type="text" id="certification_name" name="certification_name" placeholder="Certification Name">
                <input type="submit" value="Generate Certificate">
            </form>
            </div>
    </body>
</html>
