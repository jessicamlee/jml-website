<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "Web Development &vert; Jessica Lee";
        include('partials/global/head.php'); 
    ?>
    <body>
        <div class="wrapper">
        <?php include('partials/global/header.php'); ?>
            <main>
                <?php include('partials/development/development-intro.php'); ?>
                <?php include('partials/development/development.php'); ?>
                <?php include('partials/global/contact.php'); ?>
            </main>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>