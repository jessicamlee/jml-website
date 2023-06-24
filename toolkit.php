<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "Toolkit | Jessica Lee, Front&dash;End Developer";
        include('partials/global/head.php'); 
    ?>
    <body>
        <div class="wrapper">
        <?php include('partials/global/header.php'); ?>
            <main>
                <?php include('partials/toolkit/toolkit-intro.php'); ?>
                <?php include('partials/toolkit/development.php'); ?>
                <?php include('partials/toolkit/ux-design.php'); ?>
                <?php include('partials/toolkit/storytelling.php'); ?>
                <?php include('partials/global/contact.php'); ?>
            </main>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>