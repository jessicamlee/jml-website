<!DOCTYPE html>
<html lang="en-CA">
    <?php 

        $title_text = 'The Sweat Crew Website &vert; Jessica Lee';
        include('partials/global/head.php');
        
    ?>
    <body>
        <div class="wrapper">
            <?php include('partials/global/header.php'); ?>
            <main id="backtotop">
                <div class="cs-body">
                    <?php include('partials/ux/sweatcrew/intro.php'); ?>
                    <?php include('partials/ux/sweatcrew/empathize.php'); ?>
                    <?php include('partials/ux/sweatcrew/define.php'); ?>
                    <?php include('partials/ux/sweatcrew/ideate.php'); ?>
                    <?php include('partials/ux/sweatcrew/prototype.php'); ?>
                    <?php include('partials/ux/sweatcrew/test.php'); ?>
                    <?php include('partials/ux/sweatcrew/takeaways.php'); ?>
                </div>
                <?php include('partials/global/backtotop.php'); ?>
                <?php include('partials/global/contact.php'); ?>
            </main>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>