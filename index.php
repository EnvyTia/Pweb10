<!DOCTYPE html>
<html>
<head>
    <title>New Student Registration Form | SMKN 7 Coding</title>
</head>

<body>
    <header>
        <h3>New Student Registration Form</h3>
        <h1>SMKN 7 Coding</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="regisForm.php">Register New</a></li>
            <li><a href="studentList.php">Registrants</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'success'){
                echo "New student registration successful!";
            } else {
                echo "Registration failed!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html>