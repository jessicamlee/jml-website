<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $project_title = "LOCLO Homepage &vert; Jessica Lee";
        include('../partials/projects/head_projects.php');
    ?>
    <body>
        <div class="wrapper">
            <?php include('../partials/projects/header_projects.php'); ?>
            <main class="artifact-pg">
                <?php
                    $project_title = 'Spring Local 2022';
                    $project_type = 'Responsive Homepage';
                    $project_description = 'Featuring refreshing&comma; timeless pieces&comma; check out LOCLO&apos;s new landing&comma; shop&comma; and contact pages on mobile&comma; tablet&comma; and desktop screens for their latest Spring Local 2022 Collection&excl;';
                    $project_skills = 'PHP &vert; MySQL &vert; SASS &vert; HTML5';
                    $live_link = 'https://locloclothing.jessicamlee.dev/';
                    $code_link = 'https://github.com/jessicamlee/loclo-clothing';
                    $project_img_src = 'loclo_cover';
                    $project_img_alt = 'LOCLO Homepage Website Cover Photo';
                    include('../partials/projects/artifact_overview.php');
                ?>
                <section class="more-projects">
                    <div class="container">
                        <h2 data-aos="fade-right">More Projects&colon;</h2>
                        <a class="block" data-aos="fade-right" data-aos-delay="100" href="../projects/cafehop.php" title="Caf&eacute; Hop Mobile App">Caf&eacute; Hop App</a>
                        <a class="block" data-aos="fade-right" data-aos-delay="200" href="../projects/mytodo.php" title="My To&dash;Do List with Dark Mode">To&dash;Do List with Dark Mode</a>
                    </div>
                </section>
                <?php include('../partials/global/contact.php'); ?>
            </main>
            <?php include('../partials/global/footer.php'); ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="../scripts/scroll-lock.js"></script>
        <script src="../scripts/main.js"></script>
    </body>
</html>