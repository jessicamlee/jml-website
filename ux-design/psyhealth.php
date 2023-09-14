<!DOCTYPE html>
<html lang="en-CA">
    <?php 

        $title_text = 'PsyHealth App &vert; Jessica Lee';
        include('../partials/global/head_projects.php');
        
    ?>
    <body>
        <div class="wrapper">
            <?php include('../partials/global/header_projects.php'); ?>
            <main id="backtotop">
                <div class="cs-body">
                    <?php include('../partials/ux/psyhealth/intro.php'); ?>
                    <?php include('../partials/ux/psyhealth/empathize.php'); ?>
                    <?php include('../partials/ux/psyhealth/define.php'); ?>
                    <?php include('../partials/ux/psyhealth/takeaways.php'); ?>
                </div>
                <?php include('../partials/global/backtotop.php'); ?>
                <?php include('../partials/global/contact.php'); ?>
            </main>
            <?php include('../partials/global/footer.php'); ?>
        </div>
        <script src="../build/js/main.js"></script>
    </body>
</html>