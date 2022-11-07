<?php 
    include('init.php');
?>
<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "Jessica Lee &vert; Front&dash;End Development";
        include('partials/global/head.php'); 
    ?>
    <body>
        <div class="wrapper">
            <?php include('partials/global/header.php'); ?>
            <main data-aos-delay="800">
                <?php include('partials/home/intro-banner.php'); ?>
                <?php include('partials/home/latest-projects.php'); ?>
                <?php include('partials/home/about-jessica.php'); ?>
                <?php include('partials/global/contact.php'); ?>
            </main>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="scripts/scroll-lock.js"></script>
        <script src="scripts/main.js"></script>
    </body>
</html>