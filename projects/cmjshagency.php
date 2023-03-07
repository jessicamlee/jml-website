<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $project_title = "CMJSH Agency &vert; Jessica Lee";
        include('../partials/projects/head_projects.php');
    ?>
    <body>
        <div class="wrapper">
            <?php include('../partials/projects/header_projects.php'); ?>
            <main class="artifact-pg">
                <?php
                    $project_title = 'CMJSH Agency';
                    $project_type = 'Responsive React Landing Pages';
                    $project_description = 'CMJSH Agency is a fictional&comma; digital marketing agency focused on designing&comma; developing&comma; and marketing accessible business solutions in the forms of responsive website interfaces&period;';
                    $project_skills = 'React &vert; TailwindCSS &vert; BrowserStack';
                    $live_link = 'https://jessicamlee.github.io/CMJSH-agency/';
                    $code_link = 'https://github.com/jessicamlee/CMJSH-agency';
                    $project_img_src = 'cmjsh_cover';
                    $project_img_alt = 'CMJSH Agency Website Cover Photo';
                    include('../partials/projects/artifact_overview.php');
                ?>
                <section class="more-projects">
                    <div class="container">
                        <h2 data-aos="fade-right">More Projects&colon;</h2>
                        <a class="block" data-aos="fade-right" data-aos-delay="100" href="../projects/hackthebreak2023.php" title="BCIT Hack the Break 2023 Website">BCIT Hack the Break 2023 Website</a>
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