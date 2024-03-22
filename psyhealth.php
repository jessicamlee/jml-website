<!DOCTYPE html>
<html lang="en-CA">
    <?php 

        $title_text = 'PsyHealth App &vert; Jessica Lee';
        include('partials/global/head.php');
        
    ?>
    <body>
        <div class="wrapper">
            <?php include('partials/global/header.php'); ?>
            <main id="backtotop" class="cs-body">
                <?php include('partials/ux/psyhealth/intro.php'); ?>
                <?php include('partials/ux/psyhealth/highlights.php'); ?>
                <?php include('partials/ux/psyhealth/empathize.php'); ?>
                <?php include('partials/ux/psyhealth/define.php'); ?>
                <?php include('partials/ux/psyhealth/ideation.php'); ?>
                <?php include('partials/ux/psyhealth/iteration.php'); ?>
                <?php include('partials/ux/psyhealth/testing.php'); ?>
                <?php include('partials/ux/psyhealth/nextsteps.php'); ?>
                <?php include('partials/global/backtotop.php'); ?>
            </main>
            <?php include('partials/global/contact.php'); ?>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>