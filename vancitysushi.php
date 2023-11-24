<!DOCTYPE html>
<html lang="en-CA">
    <?php 

        $title_text = 'Vancity Sushi App &vert; Jessica Lee';
        include('partials/global/head.php');

    ?>
    <body>
        <div class="wrapper">
            <?php include('partials/global/header.php'); ?>
            <main id="backtotop">
                <div class="cs-body">
                    <?php include('partials/ux/vancitysushi/intro.php'); ?>
                    <?php include('partials/ux/vancitysushi/empathize.php'); ?>
                    <?php include('partials/ux/vancitysushi/define.php'); ?>
                    <?php include('partials/ux/vancitysushi/ideate.php'); ?>
                    <?php include('partials/ux/vancitysushi/prototype.php'); ?>
                    <?php include('partials/ux/vancitysushi/test.php'); ?>
                    <?php include('partials/ux/vancitysushi/takeaways.php'); ?>
                </div>
                <?php include('partials/global/backtotop.php'); ?>
                <?php include('partials/global/contact.php'); ?>
            </main>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>