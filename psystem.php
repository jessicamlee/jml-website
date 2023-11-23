<!DOCTYPE html>
<html lang="en-CA">
    <?php 

        $title_text = 'Psystem &vert; Jessica Lee';
        include('partials/global/head.php');
        
    ?>
    <body>
        <div class="wrapper">
            <?php include('partials/global/header.php'); ?>
            <main id="backtotop">
                <div class="cs-body">
                    <?php include('partials/ux/psystem/problem.php'); ?>
                    <?php include('partials/ux/psystem/solution.php'); ?>
                    <?php include('partials/ux/psystem/takeaways.php'); ?>
                </div>
                <?php include('partials/global/backtotop.php'); ?>
                <?php include('partials/global/contact.php'); ?>
            </main>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>