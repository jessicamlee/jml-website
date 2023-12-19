<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "About &vert; Jessica Lee&comma; Product&sol;UX Design&comma; Development&comma; Content Strategy";
        include('partials/global/head.php'); 
    ?>
    <body>
        <div class="wrapper">
            <?php include('partials/global/header.php'); ?>
            <main>
                <?php include('partials/about/about-jessica.php'); ?>
                <?php include('partials/about/mission-values.php'); ?>
                <?php include('partials/about/proud-moments.php'); ?>
                <?php include('partials/global/contact.php'); ?>
            </main>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>