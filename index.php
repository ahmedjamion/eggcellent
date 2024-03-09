<!-- Eggcellent Poultry Farm Management System -->
<?php require './config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include './styles.php'; ?>

    <title>Eggcellent</title>
</head>

<body>
    <div class="container">
        <!-- header -->
        <header>
            <h1>Eggcellent</h1>
        </header>
        <div class="sidebar-main">
            <!-- nav -->
            <nav class="sidebar">
                <?php include './components/sidebar.php'; ?>
            </nav>
            <!-- content -->
            <main>
                <?php include './components/maincontainer.php' ?>
            </main>
        </div>
        <!-- footer -->
        <footer>Footer</footer>
    </div>


    <?php include './scripts.php'; ?>
</body>

</html>