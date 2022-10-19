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
                <section class="section container project-overview flex bg-forestgreen" data-aos="fade-right" data-aos-delay="100">
                    <div class="project-details" data-aos="fade-right" data-aos-delay="300">
                        <p class="project-skills">PHP &vert; SASS</p>
                        <h1 class="project-title">Spring Local 2022 <br class="hidden-tablet"> by LOCLO</h1>
                        <p class="project-type">Responsive e&dash;Commerce Homepage</p>
                        <p class="project-description">LOCLO was in need of a landing page for its Spring Local 2022 collection&period; Featuring refreshing&comma; timeless pieces&comma; users can browse the new landing page on mobile&comma; tablet&comma; and desktop screens&period;</p>
                        <div class="links-btn-container flex">
                            <a class="code-link box-shadow-light" data-aos="fade-right" data-aos-delay="500" href="https://github.com/jessicamlee/loclo-clothing" target="_blank" title="Link to GitHub Repository">Review Code</a>
                            <a class="live-link text-forestgreen box-shadow-light" data-aos="fade-right" data-aos-delay="300" href="#" target="_blank" title="Link to GitHub Repository">Visit Site</a>
                        </div>
                    </div>
                    <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="600">
                        <img class="project-img zoom-forestgreen" src="../images/projects/loclo_develop/loclo_developed_v2.jpg" alt="LOCLO Homepage Project Cover Photo">
                    </div>
                </section>
                <section class="section">
                    <div class="container project-process">
                        <div class="phase1">
                            <h2 data-aos="fade-right" data-aos-delay="600">Chosen Solution</h2>
                            <div class="phase-info flex">
                                <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="500">
                                    <img class="project-img zoom-forestgreen" src="../images/projects/loclo_develop/loclo_dev_responsive.jpg" alt="Screenshot of LOCLO Homepage Planning Process">
                                </div>
                                <div class="phases-desc" data-aos="fade-right" data-aos-delay="800">
                                    <p>To create the website efficiently and in a scalable manner&comma; SASS was used to style the responsive website&period;</p>
                                    <p>Combining the use of variables&comma; nesting&comma; and mixins&comma; my workflow was more organized than using simple CSS or a CSS library and easier to navigate and manage during each stage of the project&period;</p>
                                    <p>To further simplify the building process&comma; I used PHP to manage and organize the seasonal and staple product items in LOCLO&apos;s database&period;</p>
                                </div>
                            </div>
                        </div>
                        <div class="phase2">
                            <h2 data-aos="fade-right">Challenges</h2>
                            <div class="phase-info flex">
                                <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="100">
                                    <img class="project-img zoom-forestgreen" src="../images/projects/loclo_develop/loclo_dev_v1.jpg" alt="Screenshot of Problems in LOCLO Homepage">
                                </div>
                                <div class="phases-desc" data-aos="fade-right" data-aos-delay="200">
                                    <p>Building a mobile&dash;first website meant understanding how the designs were made from 280&dash; to 1200&dash;pixel wide screens&period;</p>
                                    <p>Planning each stage of the project helped me allocate sufficient time and energy to create the minimum viable product&period;</p>
                                    <p>I also set time aside to test and debug each breakpoint to ensure a smooth&comma; gradual&comma; and interruption&dash;free experience for LOCLO&apos;s users&period;</p>
                                </div>
                            </div>
                        </div>
                        <div class="phase3">
                            <h2 data-aos="fade-right">Next Steps</h2>
                            <div class="phase-info flex">
                                <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="100">
                                    <img class="project-img zoom-forestgreen" src="../images/projects/loclo_develop/loclo_576px_comparison.jpg" alt="Screenshot of LOCLO Homepage Design">
                                </div>
                                <div class="phases-desc" data-aos="fade-right" data-aos-delay="200">
                                    <p>Expanding LOCLO&apos;s website by adding a search function to filter the product items and additional login options like Google accounts using Firebase would make the site more accessible to other users to engage with the site&period;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section more-projects">
                    <div class="container">
                        <h2 data-aos="fade-right">More Projects&colon;</h2>
                        <a class="block" data-aos="fade-right" data-aos-delay="150" href="../projects/todo-list.php" title="To-Do List with Dark Mode">To&dash;Do List with Dark Mode</a>
                        <a class="block" data-aos="fade-right" data-aos-delay="300" href="../projects/cafehop.php" title="Cafe Hop Mobile App">Caf&eacute; Hop App</a>
                    </div>
                </section>
                <?php require ('../partials/global/contact.php'); ?>
            </main>
            <?php require('../partials/global/footer.php'); ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="../scripts/medium-zoom.min.js"></script>
        <script src="../scripts/scroll-lock.js"></script>
        <script src="../scripts/main.js"></script>
    </body>
</html>