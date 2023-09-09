<!DOCTYPE html>
<html lang="en-CA">
    <?php 

        $title_text = 'LOCLO Clothing Website &vert; Jessica Lee';
        include('../partials/global/head_projects.php');

    ?>
    <body>
        <div class="wrapper">
            <?php include('../partials/global/header_projects.php'); ?>
            <main id="backtotop">
                <div class="cs-body">
                    <?php include('../partials/ux/loclo-web/intro.php'); ?>
                    <?php include('../partials/ux/loclo-web/empathize.php'); ?>
                    <?php include('../partials/ux/loclo-web/define.php'); ?>
                    <?php include('../partials/ux/loclo-web/ideate.php'); ?>
                    <?php include('../partials/ux/loclo-web/prototype.php'); ?>
                    <?php include('../partials/ux/loclo-web/test.php'); ?>
                    <?php include('../partials/ux/loclo-web/takeaways.php'); ?>
                </div>
                <?php include('../partials/global/backtotop.php'); ?>
                <?php include('../partials/global/contact.php'); ?>
            </main>
            <?php include('../partials/global/footer.php'); ?>
        </div>
        <script src="../build/js/main.js"></script>
    </body>
</html>