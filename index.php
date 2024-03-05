<!-- Eggcellent Poultry Farm Management System -->
<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">

    <title>Eggcellent</title>
</head>

<body>
    <div class="container-fluid p-0 main-container">
        <!-- header -->
        <header>
            <h1>Eggcellent Poultry Farm Management System</h1>
        </header>


        <div class="sidebar-main">
            <!-- nav -->
            <nav class="sidebar">
                <?php include 'nav.php'; ?>
            </nav>


            <!-- main -->
            <main>
                <?php include 'main.php'; ?>
            </main>
        </div>


        <!-- footer -->
        <footer>Footer</footer>
    </div>


    <!-- js files -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- initialize tooltip -->
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>