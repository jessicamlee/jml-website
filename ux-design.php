<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "UX Design &vert; Jessica Lee Front&dash;End Developer &amp; Web Designer";
        include('partials/global/head.php'); 
    ?>
    <body>
        <div class="wrapper">
        <?php include('partials/global/header.php'); ?>
            <main>
                <?php include('partials/ux/ux-intro.php'); ?>
                <?php include('partials/ux/ux-studies.php'); ?>
                <?php include('partials/global/contact.php'); ?>
            </main>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>