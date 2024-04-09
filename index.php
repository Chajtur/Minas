<?php
session_start();

?>

<!doctype html>

<head>
    <title>Control de Mina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="min-h-screen min-w-screen">
    <?php
    if (isset($_SESSION['user_id'])) {
        // User is logged in
        include 'views/index.php';
    } else {
        // User is not logged in
        include 'views/login.php';
    }
    ?>
    <footer class="w-full fixed bottom-0 text-sky-950 text-center">&copy; Hondutech 2024</footer>
</body>

</html>