<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $project_title = "LOCLO Homepage &vert; Jessica Lee";
        require('../partials/global/head_projects.php'); 
    ?>
    <body>
        <div class="wrapper">
            <?php require('../partials/global/header_projects.php'); ?>
            <main class="artifact-pg">
                <section class="container project-overview flex bg-violet" data-aos="fade-right" data-aos-delay="100">
                    <div class="project-details" data-aos="fade-right" data-aos-delay="300">
                        <p class="project-skills">HTML5 &vert; SASS &vert; PHP &vert; MySQL</p>
                        <h1 class="project-title">Spring Local 2022 <br class="hidden-tablet"> by LOCLO</h1>
                        <p class="project-type">Responsive e&dash;Commerce Homepage</p>
                        <p class="project-description">Featuring refreshing&comma; timeless pieces&comma; check out LOCLO&apos;s new landing&comma; shop&comma; and contact pages on mobile&comma; tablet&comma; and desktop screens for their latest Spring Local 2022 Collection&excl;</p>
                        <div class="links-btn-container flex">
                            <a class="live-link box-shadow-light text-violet" data-aos="fade-right" data-aos-delay="500" href="#" target="_blank" title="Link to Live Site">Visit Site</a>
                            <a class="code-link box-shadow-light" data-aos="fade-right" data-aos-delay="300" href="https://github.com/jessicamlee/loclo-clothing" target="_blank" title="Link to GitHub Repository">Review Code</a>
                        </div>
                    </div>
                    <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="600">
                        <img class="project-img" src="../images/projects/loclo_cover.jpg" alt="LOCLO Homepage Project Cover Photo">
                    </div>
                </section>
                <section class="more-projects">
                    <div class="container">
                        <h2 data-aos="fade-right">More Projects&colon;</h2>
                        <a class="block" data-aos="fade-right" data-aos-delay="150" href="../projects/cafehop.php" title="Cafe Hop Mobile App">Caf&eacute; Hop App</a>
                        <a class="block" data-aos="fade-right" data-aos-delay="300" href="../projects/todo-list.php" title="To-Do List with Dark Mode">To&dash;Do List with Dark Mode</a>
                    </div>
                </section>
                <?php require ('../partials/global/contact.php'); ?>
            </main>
            <?php require('../partials/global/footer.php'); ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="../scripts/scroll-lock.js"></script>
        <script src="../scripts/main.js"></script>
    </body>
</html>