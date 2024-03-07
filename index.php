<!-- Eggcellent Poultry Farm Management System -->
<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/sidebar.css">

    <title>Eggcellent</title>
</head>

<body>
    <div class="container">
        <!-- header -->
        <header>
            <h1>Eggcellent Poultry Farm Management System</h1>
        </header>


        <div class="sidebar-main">
            <!-- nav -->
            <nav class="sidebar">
                <?php include './components/sidebar.php'; ?>
            </nav>


            <!-- main -->
            <main>
                <?php include './components/main.php' ?>
            </main>
        </div>


        <!-- footer -->
        <footer>Footer</footer>
    </div>

    <script src="./js/sidebar.js"></script>
</body>

</html>