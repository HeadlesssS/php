<!DOCTYPE html>
<html>
<head>
    <title>Submission Received</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Thank You!</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $message = htmlspecialchars($_POST['message']);


        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Message:</strong> $message</p>";
        
    } else {
        echo "<p>No data received.</p>";
    }
    ?>

<a href="index.php">Go Back</a>
</body>
</html>
