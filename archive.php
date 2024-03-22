<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "Log &vert; Jessica Lee&comma; Product&sol;UX Design&comma; Development&comma; Content Strategy";
        include('partials/global/head.php'); 
    ?>
    <body>
        <div class="wrapper">
        <?php include('partials/global/header.php'); ?>
            <main>
                <?php include('partials/archive/intro.php'); ?>
                <?php include('partials/archive/ux-design.php'); ?>
                <?php include('partials/archive/development.php'); ?>
                <?php include('partials/archive/storytelling.php'); ?>
                <?php include('partials/global/contact.php'); ?>
            </main>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>