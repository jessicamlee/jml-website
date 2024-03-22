<!DOCTYPE html>
<html lang="en-CA">
    <?php 

        $title_text = 'Psystem &vert; Jessica Lee';
        include('partials/global/head.php');
        
    ?>
    <body>
        <div class="wrapper">
            <?php include('partials/global/header.php'); ?>
            <main id="backtotop" div class="cs-body">
                <?php include('partials/ux/psystem/intro.php'); ?>
                <?php include('partials/ux/psystem/highlights.php'); ?>
                <?php include('partials/ux/psystem/empathize.php'); ?>
                <?php include('partials/ux/psystem/define.php'); ?>
                <?php include('partials/ux/psystem/ideation.php'); ?>
                <?php include('partials/ux/psystem/iteration.php'); ?>
                <?php include('partials/ux/psystem/testing.php'); ?>
                <?php include('partials/ux/psystem/lessons.php'); ?>
                <?php include('partials/ux/psystem/nextsteps.php'); ?>
                <?php include('partials/global/backtotop.php'); ?>
            </main>
            <?php include('partials/global/contact.php'); ?>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>