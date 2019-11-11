<?php
    $error = false;
    if($_POST['student_name'] != "" && $_POST['course_name'] != "" && $_POST['certification_name'] != "") {
        $student_name = $_POST['student_name'];
        $course_name = $_POST['course_name'];
        $certification_name = $_POST['certification_name'];
    } else {
        $error = true;
    }
    if(!$error) {
        //echo $student_name;
        //echo $course_name;
        //echo $certification_name;
    } else {
        echo "Please enter required details";
    }
    $content = '<html>
    <head>
        <title>Generate Certificate</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>
        <div id="certificate" class="certificate">
            <div class="certificate-body">
                <p class="student_name">'.$student_name.'</p>
                <p class="course_name">on successful complition of the course
                    <span>'.$course_name.'</span> is certified as</p>
                <p class="certification_name">'.$certification_name.'</p>
            </div>
            <div class="issued">Issued On '.date("d/m/Y").'</div>
        </div>
    </body>
</html>';
?>
<html>
    <head>
        <title>Generate Certificate</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <style>
            </style>
    </head>
    <body>
        <div id="certificate" class="certificate">
            <div class="certificate-body">
                <p class="student_name"><?php echo $student_name; ?></p>
                <p class="course_name">on successful completion of the course
                    <span><?php echo $course_name; ?></span> is certified as</p>
                <p class="certification_name"><?php echo $certification_name; ?></p>
            </div>
            <div class="issued">Issued On <?php echo date("d/m/Y"); ?></div>
            <form method="POST" action="download.php" style="bottom: -390px;
    position: relative;">
            <input type="hidden" name="content" value='<?php echo $content; ?>' />
            <input type="submit" value="Download">
        </form>
        </div>
        
    </body>
</html>


