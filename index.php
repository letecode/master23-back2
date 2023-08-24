<?php
    include('includes/data.php');
    include_once("includes/data.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1><?php echo greeting($utilisateur['name'], "Bonsoir"); ?></h1>

    <form action="includes/login.php" method="post">
        <input type="email" name="email">
        <input type="password" name="password" />
        <button type="submit">Login</button>
    </form>

    <script src="assets/js/script.js"></script>
</body>
</html>