<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $project_title = "Caf&eacute; Hop App &vert; Jessica Lee";
        include('../partials/projects/head_projects.php');
    ?>
    <body>
        <div class="wrapper">
            <?php include('../partials/projects/header_projects.php'); ?>
            <main class="artifact-pg">
                <?php
                    $project_title = 'Caf&eacute; Hop';
                    $project_type = 'Android Mobile Application';
                    $project_description = 'Track your next productivity spot to study or work with reliable wifi&comma; charging outlets&comma; and yummy snacks with Caf&eacute; Hop&excl;';
                    $project_skills = 'React Native &vert; Android Studio';
                    $live_link = 'https://cafehop.jessicamlee.dev/';
                    $code_link = 'https://github.com/jessicamlee/cafehop';
                    $project_img_src = 'cafehop_cover';
                    $project_img_alt = 'Cafe Hop App Cover Photo';
                    include('../partials/projects/artifact_overview.php');
                ?>
                <p class="in-progress">Status&colon; Development in Progress&excl;</p>
                <section class="more-projects">
                    <div class="container">
                        <h2 data-aos="fade-right">More Projects&colon;</h2>
                        <a class="block" data-aos="fade-right" data-aos-delay="100" href="../projects/locloclothing.php" title="LOCLO Responsive Homepage">LOCLO Responsive Homepage</a>
                        <a class="block" data-aos="fade-right" data-aos-delay="200" href="../projects/mytodo.php" title="My To&dash;Do List with Dark Mode">To&dash;Do List with Dark Mode</a>
                    </div>
                </section>
                <?php include('../partials/global/contact.php'); ?>
            </main>
            <?php include('../partials/global/footer.php'); ?>
        </div>
        <?php include('../partials/projects/footer_links.php'); ?>
    </body>
</html>