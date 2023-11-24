<!DOCTYPE html>
<html lang="en-CA">
    <?php 

        $title_text = 'PsyHealth App &vert; Jessica Lee';
        include('partials/global/head.php');
        
    ?>
    <body>
        <div class="wrapper">
            <?php include('partials/global/header.php'); ?>
            <main id="backtotop">
                <div class="cs-body">
                    <?php include('partials/ux/psyhealth/problem.php'); ?>
                    <?php include('partials/ux/psyhealth/solution.php'); ?>
                    <?php include('partials/ux/psyhealth/takeaways.php'); ?>
                </div>
                <?php include('partials/global/backtotop.php'); ?>
                <?php include('partials/global/contact.php'); ?>
            </main>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>