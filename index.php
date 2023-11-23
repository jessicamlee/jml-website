<?php 
    include('init.php');
?>
<!DOCTYPE html>
<html lang="en-CA">
    <?php

        $title_text = "Jessica Lee &vert; UX Design&comma; Development&comma; Content Strategy";
        include('partials/global/head.php'); 
        
    ?>
    <body>
        <div class="wrapper">
            <?php include('partials/global/header.php'); ?>
            <main>
                <?php include('partials/home/intro-banner.php'); ?>
                <?php include('partials/home/work.php'); ?>
                <?php include('partials/global/contact.php'); ?>
            </main>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>