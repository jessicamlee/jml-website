<!DOCTYPE html>
<html class="scroll-smooth" lang="en-CA">
    <?php 
        $project_title = "LOCLO Homepage &vert; Jessica Lee";
        require('../partials/global/head_projects.php'); 
    ?>
    <body>
        <?php require('../partials/global/header_projects.php'); ?>
        <main class="artifact-pg">
            <section class="section container project-overview flex bg-forestgreen" data-aos="fade-right" data-aos-delay="100">
                <div class="project-details" data-aos="fade-right" data-aos-delay="300">
                    <p class="project-skills">PHP &vert; SASS</p>
                    <h1 class="project-title">Spring Local 2022 <br class="hidden-tablet"> by LOCLO</h1>
                    <p class="project-type">Responsive e&dash;Commerce Homepage</p>
                    <p class="project-description">The LOCLO website was designed for a fictional client who is a one&dash;woman entrepreneur and environment enthusiast&period; The project goal is to make a responsive&comma; mobile&dash;friendly homepage based on <a class="design-link" href="../projects/loclo-ux-design.php" title="Visit LOCLO Website and Mobile UX Project">LOCLO&apos;s website design</a>&period;</p>
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
                        <h2 data-aos="fade-right" data-aos-delay="600">The Challenge</h2>
                        <div class="phase-info flex">
                            <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="500">
                                <img class="project-img zoom-forestgreen" src="../images/projects/loclo_develop/loclo_dev_responsive.jpg" alt="Screenshot of LOCLO Homepage Planning Process">
                            </div>
                            <div class="phases-desc" data-aos="fade-right" data-aos-delay="800">
                                <p>To create a responsive&comma; mobile&dash;first website&comma; I first created high&dash;fidelity wireframes for the most popular screen size breakpoints&period;</p>
                                <p>Creating wireframes helps me work efficiently when developing a mobile&dash;friendly website&period; I start from a 280&dash;pixel wide screen and scale to a large screen size at 1200 pixels wide&period;</p>
                                <p>Planning and outlining each stage of the project helped me manage my time and energy wisely to complete the project in time&period;</p>
                            </div>
                        </div>
                    </div>
                    <div class="phase2">
                        <h2 data-aos="fade-right">The Chosen Solution</h2>
                        <div class="phase-info flex">
                            <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="100">
                                <img class="project-img zoom-forestgreen" src="../images/projects/loclo_develop/loclo_dev_v1.jpg" alt="Screenshot of Problems in LOCLO Homepage">
                            </div>
                            <div class="phases-desc" data-aos="fade-right" data-aos-delay="200">
                                <p>The development phase began with a mobile&dash;friendly approach by structuring and styling the smallest size of 280&dash;pixels wide&period;</p>
                                <p>Mobile&dash;friendly websites are important since most users are navigating digital spaces from mobile devices with smalls screens nowadays&period;</p>
                            </div>
                        </div>
                    </div>
                    <div class="phase3">
                        <h2 data-aos="fade-right">Takeaways &amp; Next Steps</h2>
                        <div class="phase-info flex">
                            <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="100">
                                <img class="project-img zoom-forestgreen" src="../images/projects/loclo_develop/loclo_576px_comparison.jpg" alt="Screenshot of LOCLO Homepage Design">
                            </div>
                            <div class="phases-desc" data-aos="fade-right" data-aos-delay="200">
                                <p>As I styled each larger breakpoint&comma; I encountered problems with overlapping sections because of how I organized the content&period;</p>
                                <p>I first reviewed the styles for the sections at each screen size to ensure there were no syntax errors&period; I then reassigned the parent and child positions for each section to ensure smooth scalability for the larger screen sizes&period;</p>
                                <p>Next&comma; I tested the responsiveness from one breakpoint to another to check that the errors were fixed&period;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section more-projects">
                <div class="container">
                    <h2 data-aos="fade-right">More Projects&colon;</h2>
                    <ul>
                        <li data-aos="fade-right" data-aos-delay="150">
                            <a href="../projects/todo-list.php" title="To-Do List with Dark Mode"><p>To&dash;Do List with Dark Mode</p></a>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="300">
                            <a href="../projects/cafehop.php" title="Cafe Hop Mobile App"><p>Cafe Hop App</p></a>
                        </li>
                    </ul>
                </div>
            </section>
            <?php require ('../partials/global/contact.php'); ?>
        </main>
        <?php require('../partials/global/footer.php'); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="../../node_modules/aos/dist/aos.js"></script>
        <script src="../../node_modules/medium-zoom/dist/medium-zoom.min.js"></script>
        <script src="../scripts/scroll-lock.js"></script>
        <script src="../scripts/main.js"></script>
    </body>
</html>